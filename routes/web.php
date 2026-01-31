<?php

use App\Http\Controllers\SMSController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/send-sms',[SMSController::class, 'index'])->name('send-sms');

Route::post('/send-sms',[SMSController::class, 'sendSMS'])->name('send-sms-submit');
