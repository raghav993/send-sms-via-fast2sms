<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function index()
    {
        return view('send-sms');
    }
    public function sendSMS(Request $request)
    {
        $mobileNumber = $request->input('mobile');

        $apiKey = env('FAST2SMS_API_KEY');
        $apiUrl = 'https://www.fast2sms.com/dev/bulkV2';

        $message = "Hello! Your request has been received successfully. Thank you for contacting us.";

        $fields = [
            'route' => 'q',
            'message' => $message,
            'language' => 'english',
            'numbers' => $mobileNumber,
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($fields),
            CURLOPT_HTTPHEADER => [
                'authorization: ' . $apiKey,
                'accept: */*',
                'content-type: application/json',
            ],
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        if ($error) {
            return back()->with('message', 'SMS send nahi hua');
        }

        return back()->with('message', 'SMS successfully send ho gaya');
    }
}
