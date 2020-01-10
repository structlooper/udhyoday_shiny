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
route::get('/','indexContrller@index');

Auth::routes();

Route::get('/home', 'indexContrller@index')->name('home');
route::get('/farms','indexContrller@farms')->name('farms');
route::get('/support','indexContrller@support')->name('support');
route::get('/market','indexContrller@market')->name('market');

// donation routess
Route::get('/donateUs', 'DonateController@view')->name('DonatePage');
Route::post('/donating', 'DonateController@store')->name('donating');
Route::post('/paytm-callback','DonateController@paytmCallback')->name('paytm-callback');

// translated pages
Route::get('/homeT',"translatedController@view")->name('homeHindi');

// dashboard
route::get('/FarmerPotel','FarmerController@view');
route::get('/AdminPortel','AdminController@view');