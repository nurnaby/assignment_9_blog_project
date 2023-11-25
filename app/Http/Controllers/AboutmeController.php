<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    public function Abouteme(){
        return view("pages.abouteMe");
    }
}