<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// use App\Category;
// use App\Product;
// Route::get('list-cate', function(){
// 	//$cates = Category::all();
// 	$cates = Category::where('cate_name', 'like', '%i%')->where('id','>',3)->orWhere('id',1)->get();
// 	//$cates = Category::where('cate_name', 'like', '%i%')->first();
// 	$cate = Product::skip(10)->take(10)->get();
// 	$categ = Product::whereIn('id', [1,15,80])->get();
// 	dd($categ);
// });
Route::get('/', 'HomeController@index')->name('home');
Route::get('/danh-muc/{id}.htm', 'HomeController@listProducts')->name('cate');
