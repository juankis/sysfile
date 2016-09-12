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

    return view('layouts.login');
});
Route::group(['prefix' => 'sysfile'], function () {
    Route::auth();
	Route::resource('deposits','DepositsController');
    Route::resource('customers','CustomersController');
    Route::resource('operators','OperatorsController');
    Route::resource('referents','ReferentsController');
    Route::resource('addresses','AddressesController');
    Route::resource('departments','DepartmentsController');
    //DELETS
    Route::get('/address/{id}/destroy',['uses' => 'AddressesController@destroy','as' => 'sysfile.addresses.destroy']);
    Route::get('/deposit/{id}/destroy',['uses' => 'DepositsController@destroy','as' => 'sysfile.deposits.destroy']);
    Route::get('/customer/{id}/destroy',['uses' => 'CustomersController@destroy','as' => 'sysfile.customers.destroy']);
    Route::get('/referent/{id}/destroy',['uses' => 'ReferentsController@destroy','as' => 'sysfile.referents.destroy']);
    Route::get('/operator/{id}/destroy',['uses' => 'OperatorsController@destroy','as' => 'sysfile.operators.destroy']);
    Route::get('/department/{id}/destroy',['uses' => 'DepartmentsController@destroy','as' => 'sysfile.departments.destroy']);
});



//Route::get('/home', 'HomeController@index');


