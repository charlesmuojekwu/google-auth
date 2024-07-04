<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Retrieve user's email address
            $email = $user->getEmail();
            
            // Generate OTP
            $otp = rand(100000, 999999);
            
            // Store OTP in session for later verification
            Session::put('otp', $otp);
            
            // Pass the email and OTP to the view
            return redirect()->route('home')->with(['email' => $email, 'otp' => $otp]);
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Failed to authenticate with Google');
        }
    }
}
