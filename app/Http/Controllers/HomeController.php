<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    public function index(){
    	$menus = Category::take(4)->get();
    	$products = Product::take(12)->get();
    	return view('homepage',compact('menus'));
    }
}
