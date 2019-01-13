<?php
Route::get('/', "DashboardController@index")->name('dashboard');
Route::group(['prefix' => 'product'], function () {
    Route::get('/', "ProductController@index")->name('product.list');    
    Route::get('/remove/{id}', "ProductController@remove")->name('product.remove'); 

    Route::get('/add', "ProductController@add");
    Route::post('/add', "ProductController@postAdd")->name('product.add');
    
    Route::get('/edit/{id}', "ProductController@edit")->name('product.edit');    
    Route::post('/edit/{id}', "ProductController@postEdit");

    Route::post('/upload-product-gallery', "ProductController@uploadGallery")->name('product.upload-gallery');
    Route::post('/remove-product-gallery', "ProductController@removeGallery")->name('product.remove-gallery');
});

?>