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
//main page
Route::view('/', 'main');
Auth::routes();

//Login and Register
Route::get('/login/user', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/user', 'Auth\RegisterController@showAdminRegisterForm');
Route::post('/login/user', 'Auth\LoginController@adminLogin');
Route::post('/register/user', 'Auth\RegisterController@createAdmin');
Route::view('/home', 'home')->middleware('auth');
Route::view('/user', 'user');

//Viewing home after the user successfully login 
Route::view('/home', 'student.home')->middleware('auth');
Route::view('/admin', 'admin');

//After importing data
Route::get('list', 'PaymentController@welcome')->name('import');

//Storing the data
Route::post('stores/{id}', 'TablePaymentController@stores')->name('stores');
Route::post('/dashboard/store', 'PaymentController@store')->name('store');
//Paying the parent's counterpart
Route::get('pay/{id}','TablePaymentController@pay')->name('pay');

Route::get('/student/create','PaymentController@create');


//Summaries for Month, Date, Batch and INdividual
Route::get('summarybatch/{batch}','TablePaymentController@summarybatch')->name('summarybatch');
Route::get('summarymonth/{month}','TablePaymentController@summarymonth');
Route::get('summaryDate','TablePaymentController@summaryDate')->name('summaryDate');
Route::get('summary/{id}','TablePaymentController@summary');

//Importing and Exporting CSV File
Route::get('csv_file','CsvFile@index');
Route::get('csv_file/export','CsvFile@csv_export')->name('export');
Route::post('list','CsvFile@csv_import')->name('import');


//Sending and viewing a message to a student 
Route:: get('/pay/send/email', 'SendController@sendEmail')->name('mail');
Route::view('send/message','student.message');