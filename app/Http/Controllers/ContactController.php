<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contactus(){
        return view("pages.contactUs");
    }
}