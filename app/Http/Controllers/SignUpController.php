<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index()
    {
    $showDropdowns = true;
    return view('signup',compact('showDropdowns'));
    }
}
