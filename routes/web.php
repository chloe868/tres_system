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
 
Route::get('/', function () {
   return view('home');
});
Route::get('students', 'PaymentController@welcome')->name('students');
Route::get('login', 'PaymentController@login')->name('login');
Route::get('register', 'RegisterController@register')->name('register');
Route::post('firstLand', 'PaymentController@storeAdmin')->name('firstLand');
Route::post('logout', 'LoginController@__construct()')->name('logout');
 
 
Route::get('welcome', 'PaymentController@welcome')->name('update');
Route::resource('student','PaymentController');
Route::post('/dashboard/store', 'PaymentController@store')->name('store');
Route::get('/delete/{id}','PaymentController@delete');
Route::post('/update/{id}','PaymentController@update')->name('update');
Route::post('stores/{id}', 'TablePaymentController@stores')->name('stores');
Route::get('summary/{id}','TablePaymentController@summary');
Route::get('pay/{id}','TablePaymentController@pay')->name('pay');
 
 
Auth::routes();
 
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' =>'guest:user'], function() {
    //User:Login
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login')->name('login');
});