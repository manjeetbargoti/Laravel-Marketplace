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

/*Route::get('/', function () {
 return view('welcome');
});
*/

Route::get('/', function () {
    return view('pages/homepage');
   
});

Route::get('/index', function () {
    return view('pages.index');
   
});


Route::get('/about', function () {
    return view('pages.about');

});

Route::get('/404', function () {
    return view('pages.404');
    
});


Route::get('/blog', function () {
    return view('pages.blog');
    
});

Route::get('/logins', function () {
    return view('pages.logins');
    
});

Route::get('/cart', function () {
    return view('pages.cart');
    
});

Route::get('/checkout', function () {
    return view('pages.checkout');
    
});

Route::get('/contact', function () {
    return view('pages.contact');
    
});

Route::get('/my-account', function () {
    return view('pages.my-account');
    
});


Route::get('/order', function () {
    return view('pages.order');
    
});


Route::get('/shop', function () {
    return view('pages.shop');
    
});


Route::get('/single-blog', function () {
    return view('pages.single-blog');
    
});

Route::get('/single-product', function () {
    return view('pages.single-product');
    
});

Route::get('/wishlist', function () {
    return view('pages.wishlist');
    
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

