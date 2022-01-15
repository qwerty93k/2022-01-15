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


// Client route

Route::prefix('clients')->group(function () {
    //Index
    Route::get('', 'App\Http\Controllers\ClientController@index')->name('client.index'); //pasieksiu per /clients

    //Create
    Route::get('create', 'App\Http\Controllers\ClientController@create')->name('client.create');

    //Store ikelia i duombaze
    Route::post('store', 'App\Http\Controllers\ClientController@store')->name('client.store');

    //Edit form, /{client}=id
    Route::get('edit/{client}', 'App\Http\Controllers\ClientController@edit')->name('client.edit');

    //Update
    Route::post('update/{client}', 'App\Http\Controllers\ClientController@update')->name('client.update');

    //Delete
    Route::post('destroy/{client}', 'App\Http\Controllers\ClientController@destroy')->name('client.destroy');

    //Show form, /{client}=id
    Route::get('show/{client}', 'App\Http\Controllers\ClientController@show')->name('client.show');
});

// Company route

Route::prefix('companies')->group(function () {
    //Index
    Route::get('', 'App\Http\Controllers\CompanyController@index')->name('company.index');

    //Create
    Route::get('create', 'App\Http\Controllers\CompanyController@create')->name('company.create');

    //Store
    Route::post('store', 'App\Http\Controllers\CompanyController@store')->name('company.store');

    //Edit form
    Route::get('edit/{company}', 'App\Http\Controllers\CompanyController@edit')->name('company.edit');

    //Update
    Route::post('update/{company}', 'App\Http\Controllers\CompanyController@update')->name('company.update');

    //Delete
    Route::post('destroy/{company}', 'App\Http\Controllers\CompanyController@destroy')->name('company.destroy');

    //Show
    Route::get('show/{company}', 'App\Http\Controllers\CompanyController@show')->name('company.show');
});
