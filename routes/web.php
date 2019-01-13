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

Route::get('/add-cart/{id}', "HomeController@addCart")->name('cart.add');
Route::get('/check-cart', function(){
        dd(session('cart'));
})->name('cart.checkout');
Route::get('/remove-cart', function(){
        session()->forget('cart');
})->name('cart.clear');

Route::get('/chi-tiet/{id}.htm', 'HomeController@detail')->name('detail');

// Cart
Route::prefix('cart')->group(function() {
	Route::get('/', 'CartController@index')->name('cart.index');
});
//login
Route::get('cp-login',"HomeController@cpLogin")->name('login');
//check dang nhap
Route::post('cp-login',"HomeController@cpPostLogin");
Route::any('logout',"HomeController@logout")->name('logout');