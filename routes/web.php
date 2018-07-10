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
  'uses' => 'ProductController@getIndex',
  'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
   'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);


Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
//    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::get('/signup',[
  'uses' => 'UserController@getSignup',
  'as' => 'user.signup',
   'middleware' => 'guest'
]);

Route::post('/signup',[
  'uses' => 'UserController@postSignup',
  'as' => 'user.signup',
   'middleware' => 'guest'
]);

Route::get('/signin',[
  'uses' => 'UserController@getSignin',
  'as' => 'user.signin',
   'middleware' => 'guest'
]);

Route::post('/signin',[
  'uses' => 'UserController@postSignin',
  'as' => 'user.signin',
   'middleware' => 'guest'
]);

Route::get('/user/profile',[
  'uses' => 'UserController@getProfile',
  'as' => 'user.profile',
   'middleware' => 'sp'
]);

Route::get('/user/logout',[
  'uses' => 'UserController@getLogout',
  'as' => 'user.logout',
   'middleware' => 'sp'
]);
