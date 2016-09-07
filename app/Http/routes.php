<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('home');
});
Route::group(['prefix' => 'sysfile'], function () {
    Route::resource('customers','CustomersController');
   // Route::get('/customers/{id}/destroy','CustomersController@destroy');
    
    Route::resource('departments','DepartmentsController');
    Route::resource('deposits','DepositsController');
    Route::resource('operators','OperatorsController');
    Route::resource('referents','ReferentsController');
    Route::resource('addresses','AddressesController');
});

Route::auth();

Route::get('/home', 'HomeController@index');
