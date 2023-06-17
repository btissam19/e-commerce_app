<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeContoller extends Controller
{
    public function product(){
        return view('welcome_page.product');

    }
    public function about(){
        return view('welcome_page.about');
    }
    public function FAQS(){
        return view('welcome_page.FAQS'); 
    }
    public function welcome_page(){
        return view('welcome_page.welcome_page'); 
    }
}
