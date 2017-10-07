<?php

/*Route::get('/', 'IndexController@index');

Route::get('product/{productId}', 'IndexController@show')->name('productShow');

Route::get('create-product', 'IndexController@add');

Route::post('create-product', 'IndexController@store')->name('productStore');

Route::delete('create-delete/{productId}', function(\App\Product $productId){
    $productId -> delete();
    return redirect('/');
})->name('productDelete');*/

Route::resource("category", "CategoryController");


// ADMIN

//Route::get('admin', 'AdminController@index');
//Route::get('/admin/create-product', 'CategoryController@index');
//function(){return view("admin/create-product");});
