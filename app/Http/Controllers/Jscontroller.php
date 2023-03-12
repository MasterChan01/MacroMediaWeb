<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class help extends Controller
{        
    public function getAppJs()
    {
        $js = File::get(resource_path('js/app.js'));

        return response($js, 200)
            ->header('Content-Type', 'application/javascript');
    }
}


