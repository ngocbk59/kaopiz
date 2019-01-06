<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index(){
    	$products = Product::paginate(10);
    	return view('homepage',compact('products'));
    }
}
