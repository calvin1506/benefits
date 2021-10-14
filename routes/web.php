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

Route::get('/', 'IndexController@index')->name('user.home');
Route::get('/our_mission', 'IndexController@ourMission')->name('user.ourmission');
Route::get('/product_cash_advance', 'IndexController@productCash')->name('user.productcash');
Route::get('/product_topup_bill', 'IndexController@productTopup')->name('user.producttopup');
Route::get('/faqs', 'IndexController@faq')->name('user.faq');
Route::get('/get_started', 'IndexController@getStarted')->name('user.getstarted');
Route::get('/about_us', 'IndexController@about')->name('user.about');
Route::get('/contact', 'IndexController@contact')->name('user.contact');
