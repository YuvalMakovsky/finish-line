<?php

#Shop
Route::prefix('shop')->group(function () {
  Route::name('shop')->get('/','ShopController@categories');
  Route::get('cart','ShopController@cart');
  Route::get('order','ShopController@order');
  Route::get('add-to-cart','ShopController@addToCart');
  Route::get('update-cart','ShopController@updateCart');
  Route::get('remove-item','ShopController@removeItem');
  Route::get('clear-cart','ShopController@clearCart');
  Route::name('products')->get('{curl}','ShopController@products');
  Route::name('item')->get('{curl}/{purl}','ShopController@item');
      
});

#user
Route::prefix('user')->group(function () {
  Route::name('signin')->get('signin','UserController@getSignin');
  Route::post('signin','UserController@postSignin');
  Route::name('signup')->get('signup','UserController@getSignup');
  Route::post('signup','UserController@postSignup');
  Route::get('logout','UserController@logout');
    
});

#cms
Route::middleware(['adminauth'])->group(function () {

  Route::prefix('cms')->group(function () {
    Route::get('dashboard','CmsController@dashboard');
    Route::get('orders','CmsController@orders');
    Route::resource('menu', 'MenuController');
    Route::resource('content', 'ContentController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');
    
  });
});


# Pages
Route::name('home')->get('/','PagesController@home');
Route::name('about')->get('about','PagesController@about');
Route::get('get-products-json','PagesController@search');
Route::name('murl')->get('{murl}','PagesController@content');






