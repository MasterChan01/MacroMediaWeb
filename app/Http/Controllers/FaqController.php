<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
    $showDropdowns = true;
    return view('faq',compact('showDropdowns'));
    }
}
