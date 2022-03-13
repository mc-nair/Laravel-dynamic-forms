<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/createform', 'FormController@index')->name('createform');

Route::get('/addForm/{name}', 'FormController@add')->name('addForm');

Route::post('/contact', 'FormController@mailContactForm');

Route::get('/createform', 'FormController@index')->name('createform');

Route::get('/removeform', 'FormController@index')->name('removeform');


