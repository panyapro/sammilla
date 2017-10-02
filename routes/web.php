<?php

Route::get('/', 'IndexController@index');
Route::get('product/{productId}', 'IndexController@show')->name('productShow');
Route::get('/products/category/{categoryId}', 'IndexController@show_by_category');
Route::get('/products/subcategory/{subcategoryId}', 'IndexController@show_by_sub_category');
Route::get('/about-us', 'IndexController@about_us');
Route::get('/cart', 'IndexController@cart');
Route::get('/search/{query}', 'IndexController@search');


Route::get('create-product', 'IndexController@add');

Route::post('create-product', 'IndexController@store')->name('productStore');

Route::delete('create-delete/{productId}', function(\App\Product $productId){
    $productId -> delete();
    return redirect('/');
})->name('productDelete');



// ADMIN

Route::get('admin', 'AdminController@index');
Route::get('/admin/create-product', 'AdminCategoryController@index');
//function(){return view("admin/create-product");});
