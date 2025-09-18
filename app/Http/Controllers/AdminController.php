<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('pages.admin.dashboard.index');
    }
    public function useradmin(){
        $users = User::all();
    return view('pages.admin.user.index', compact('users'));
    }
    public function productadmin(){
        $products = Product::all();
        return view('pages.admin.product.index', compact('products'));
    }
    public function categories(){
        return view('pages.admin.categories.index');
    }
}
