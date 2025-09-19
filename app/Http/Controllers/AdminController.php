<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Blog;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $totalUsers = User::count();
        $totalProducts = Product::count();
        $totalcategories = Category::count();
        $totalBrands = Brand::count();
        $totalBlogs = Blog::count();
        return view('pages.admin.dashboard.index', compact('totalUsers', 'totalProducts', 'totalcategories', 'totalBrands', 'totalBlogs'));
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