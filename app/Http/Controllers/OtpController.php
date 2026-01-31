<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OtpController extends Controller
{
    public function sendOtp(Request $request)
    {
        // Your existing OTP sending logic here

        return response()->json(['message' => 'OTP sent successfully']);
    }

    public function verifyOtp(Request $request)
    {
        // Your OTP verification logic here

        return response()->json(['message' => 'OTP verified successfully']);
    }
}
