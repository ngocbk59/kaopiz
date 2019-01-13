<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;

class DashboardController extends Controller
{
    public function index(){
    	$cateNumber = Category::count();
    	$productNumber = Product::count();
		return view('admin.dashboard.index', compact('cateNumber','productNumber'));
	}
}
