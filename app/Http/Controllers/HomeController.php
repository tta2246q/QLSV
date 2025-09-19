<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;

class HomeController extends Controller
{
    public function homepage(){      
        $products = Product::take(6)->get();
        return view('pages.user.home', compact('products'));
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
    public function blogpage(){
        $blogs = Blog::all();
        return view('pages.user.blog', compact('blogs'));
    }
    public function deltaiblog($id){
        $blog = Blog::findOrFail($id);
        return view('pages.user.deltaiblog', compact('blog'));
    }
}