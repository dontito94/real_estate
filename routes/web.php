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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/viewproperty', function () {
    return view('viewproperty');
});

Route::get('/registerproperty', function () {
    return view('registerproperty');
});

<<<<<<< HEAD
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contactus', function () {
    return view('contactus');
});

Route::resource('productCRUD','ProductCRUDController');
=======
Route::get('admin', function () {
    return view('admin');
});
>>>>>>> 7ef660d9185c99de5b1fc2ef943869516e8a7b97
