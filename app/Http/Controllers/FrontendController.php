<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function student() 
    {
        return view('frontend.student');
    }
}
