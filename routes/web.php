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
    return view('student.welcome');
});
// Route::get('/student', function () {
//     return view('student.welcome','StudentsController@welcome');
// });


// Auth::routes();

Route::get('welcome', 'PaymentController@welcome')->name('update');
Route::resource('student','PaymentController');
Route::post('/dashboard/store', 'PaymentController@store')->name('store');
Route::get('/delete/{id}','PaymentController@delete');
Route::post('/update/{id}','PaymentController@update')->name('update');




Route::post('stores/{id}', 'TablePaymentController@stores')->name('stores');
// Route::post('summary/{id}', 'TablePaymentController@summary')->name('summary');
// Route::resource('student','TablePaymentController');
Route::get('summary/{id}','TablePaymentController@summary');
Route::get('pay/{id}','TablePaymentController@pay')->name('pay');



Route::get('/welcome/send/email','SendController@sendEmail')->name('mail');


// Route::get('/live_search', 'LiveSearch@index');
// Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

