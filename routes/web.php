<?php

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/well', function () {
	session()->forget('message');
    session()->forget('messagex');
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bgadmin/registercompany', 'CompanyController@index')->name('registercompanyform');
Route::post('/registercompany', 'Auth\RegisterController@registercompany')->name('registercompany');


//Backend 


Route::get('/backend/newcompanyform', 'CompanyController@index')->name('newcompanyform');
Route::get('/backend/allcompanies', 'CompanyController@allcompany')->name('allcompany');
Route::get('/backend/viewcompany/{id}', 'CompanyController@viewcompany')->name('viewcompany');
Route::get('/backend/updatecompany/{id}', 'CompanyController@updatecompany')->name('updatecompany');
Route::post('/updatecompany', 'CompanyController@updatecompanyinfo')->name('updatecompanyinfo');