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

Route:: get('/home','SiteController@getHome');
Route:: get('/','SiteController@getHomePage')->name('home');
Route:: get('/aboutus','SiteController@getaboutus')->name('aboutus');
Route:: get('/accomodation','SiteController@getaccomodation')->name('accomodation');
Route:: get('/view','SiteController@getview')->name('view');
Route:: get('/view1','SiteController@getview1')->name('view1');
Route:: get('/view2','SiteController@getview2')->name('view2');
Route:: get('/contactus','SiteController@getcontactus')->name('contactus');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Products
Route::get('/product/add', 'HomeController@getAddProduct')->name('getAddProduct');
Route::get('/product/manage', 'HomeController@getManageProduct')->name('getManageProduct');
Route::post('/product/add', 'HomeController@postAddProduct')->name('postAddProduct');

// Sell
Route::get('/sell', 'HomeController@getSell')->name('getSell');
Route::post('/sell', 'HomeController@postAddPurchase')->name('postAddPurchase');
Route::get('/cancel/sell', 'HomeController@getCancelSell')->name('getCancelSell');
Route::post('/sell/paid/{code}', 'HomeController@postSellPaid')->name('postSellPaid');

//testing page
Route::get('/testing/sms', 'HomeController@getSMS')->name('getSMS');





