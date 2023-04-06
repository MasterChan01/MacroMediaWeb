<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $showDropdowns = true;
        return view('contact-us', compact('showDropdowns'));
    }
}
