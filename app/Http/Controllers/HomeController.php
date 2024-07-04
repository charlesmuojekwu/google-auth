<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $email = session('email');
        $otp = session('otp');

        return view('home', compact('email', 'otp'));
    }
}
