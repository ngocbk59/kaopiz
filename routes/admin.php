<?php
Route::get('/', "DashboardController@index")->name('dashboard');
Route::get('/send-mail/{recciveEmail}/{subject}/{content}', "DashboardController@sendMail")->name('sendmail');
Route::group(['prefix' => 'product'], function () {
    Route::get('/', "ProductController@index")->name('product.list');    
    Route::get('/remove/{id}', "ProductController@remove")->name('product.remove');    
    Route::get('/add', "ProductController@add")->name('product.add');    
    Route::post('/add', "ProductController@postAdd");
    
    Route::get('/edit/{id}', "ProductController@edit")->name('product.edit');    
    Route::post('/save-update', "ProductController@postEdit")->name('product.save-edit');
    Route::post('/upload-product-gallery', "ProductController@uploadGallery")->name('product.upload-gallery');
    Route::post('/remove-product-gallery', "ProductController@removeGallery")->name('product.remove-gallery');
});
?>