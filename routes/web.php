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
Route::get('/',[
   'uses' => 'Frontend\PageController@index',
   'as' => 'homepage'
]);

Route::get('/blog',[
   'uses' => 'Frontend\PageController@blog',
   'as' => 'blogpage'
]);

Route::get('/product-detail/{id}/{slug?}', [ 
         'uses' => 'Frontend\PageController@productdetail',
         'as' => 'productdetail'
])->where('slug', '[\w\d\-\_]+');

Route::get('/rating-review/{id}',[
      'uses' => 'Product\ProductController@review',
      'middleware' => ['auth'],
      'as' => 'review'
]);

Route::post('/post-review/{id}',[
      'uses' => 'Product\ProductController@postreview',
      'as' => 'postreview'
]);

Route::get('/contact',[
   'uses' => 'Frontend\PageController@contact',
   'as' => 'contactpage'
]);

Route::get('/regsiter',[
   'uses' => 'Frontend\PageController@register',
   'as' => 'registerpage'
]);

Route::post('/register',[
   'uses' => 'Auth\UserController@saveuser',
   'as' => 'saveuser'
]);

Route::get('/logout',[
   'uses' => 'Auth\UserController@logout',
   'as' => 'logout'
]);

Route::get('/login',[
   'uses' => 'Frontend\PageController@login',
   'as' => 'login'
]);

Route::post('/login',[
   'uses' => 'Auth\UserController@login',
   'as' => 'login'
]);

Route::post('/store-wishlist/{id}',[
   'uses' => 'WishlistController@store',
   'middleware' => ['auth'],
   'as' => 'wishliststore'
]);

Route::get('/Wishlist',[
      'uses' => 'WishlistController@index',
      'middleware' => ['auth'],
      'as' => 'wishlist'
]);

Route::get('/item/{slug}', [
      'uses' => 'CartController@index',
      'as' => 'showproduct'
]);

Route::get('/add-to-cart/{product}', [
      'uses' => 'CartController@addtocart',
      'as' => 'addtocart'
]);

Route::get('/cart', [
      'uses' => 'CartController@cart',
      'as' => 'cart'
]);

Route::get('/delete/{id}', [
      'uses' => 'CartController@removeItem',
      'as' => 'deleteitem'
]);

Route::get('/reduce/{id}', [
      'uses' => 'CartController@reduceByOne',
      'as' => 'reduceitem'
]);

Route::get('/checkout/{id}', [
      'uses' => 'CheckoutController@index',
      'middleware' => ['auth'],
      'as' => 'checkout'
]);

Route::post('/checkout', [
      'uses' => 'CheckoutController@checkoutstore',
      'as' => 'checkoutstore'
]);

Route::get('/stripe-payment', [
      'uses' => 'CheckoutController@pay',
      'as' => 'pay'
]);



Route::get('/addmoney-stripe',[
      'uses' => 'StripeController@payWithStripe',
      'as' => 'paywithstripe'
]);

Route::post('/addmoney-stripe',[
      'uses' => 'StripeController@payPaymentWithStripe',
      'as' => 'addmoney.stripe'
]);





//=======USER=======//

Route::group([ 'middleware' => 'web', 'prefix' => 'user', 'before' => 'user' ], function(){

   Route::get('/dashboard',[
      'uses' => 'Frontend\PageController@account',
      'as' => 'account'
   ]);

   Route::get('/my-account',[
      'uses' => 'Frontend\PageController@myaccount',
      'as' => 'myaccount'
   ]);

   Route::get('/my-product',[
      'uses' => 'Product\ProductController@myproduct',
      'as' => 'myproduct'
   ]);

   Route::post('/profile', [
       'uses' => 'Frontend\PageController@updateprofile',
      'as' => 'updateprofile'
   ]);

   Route::get('/post-product',[
      'uses' => 'Product\ProductController@post_product',
      'middleware' => ['auth'],
      'as' => 'post_product'
   ]);

   Route::post('/save-product',[
      'uses' => 'Product\ProductController@saveproduct',
      'as' => 'saveproduct'
   ]);

   Route::get('/delete-product/{id}', [
         'uses' => 'Product\ProductController@deleteproduct',
         'as' => 'deleteproduct'
   ]);

});
