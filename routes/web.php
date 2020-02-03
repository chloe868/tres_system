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
//cherry
Route::view('/', 'main');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
 
Route::post('/login/admin', 'Auth\LoginController@adminLogin');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
 
Route::view('/home', 'student.home')->middleware('auth');
// Route::get('/homes', 'PaymentController@welcome')->name('homes');
Route::view('/admin', 'admin');

//mellyne
// Route::get('/', function () {
//     return view('homepage');
// });


// Auth::routes();
Route::get('homepage', 'PaymentController@welcome');
Route::get('list', 'PaymentController@welcome')->name('import');
Route::resource('student','PaymentController');
Route::post('/dashboard/store', 'PaymentController@store')->name('store');
Route::get('/delete/{id}','PaymentController@delete');
Route::post('/update/{id}','PaymentController@update')->name('update');
Route::get('summaries','PaymentController@summaries');




Route::post('stores/{id}', 'TablePaymentController@stores')->name('stores');


// Route::post('summary/{id}', 'TablePaymentController@summary')->name('summary');
// Route::resource('student','TablePaymentController');
Route::get('summary/{id}','TablePaymentController@summary');
Route::view('send/message','student.message');

Route::get('pay/{id}','TablePaymentController@pay')->name('pay');
Route::get('summarybatch/{batch}','TablePaymentController@summarybatch')->name('summarybatch');
Route::get('total/{id}','TablePaymentController@total');
Route::get('summaryYear/{batch}','TablePaymentController@summaryYear');
Route::get('summarymonth/{month}','TablePaymentController@summarymonth');
Route::get('summaryDate','TablePaymentController@summaryDate')->name('summaryDate');
Route::get('displayByDate','TablePaymentController@displayByDate')->name('displayByDate');




// Route::get('/live_search', 'LiveSearch@index');
// Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Route::get('csv_file','CsvFile@index');
Route::get('csv_file/export','CsvFile@csv_export')->name('export');
Route::post('list','CsvFile@csv_import')->name('import');


Route:: post('/pay/send/email', 'SendController@sendEmail')->name('mail');