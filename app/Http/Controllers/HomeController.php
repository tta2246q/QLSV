<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        return view('pages.user.home');
    }
    public function aboutpage(){
        return view('pages.user.about');
    }
    public function productpage(){
        return view('pages.user.product');
    }
    public function contactpage(){
        return view('pages.user.contact');
    }
    public function registerpage(){
        return view('pages.user.register');
    }
    public function loginpage(){
        return view('pages.user.login');
    }
}
