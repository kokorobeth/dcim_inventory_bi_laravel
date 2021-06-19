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


Route::group(['middleware' => ['auth']], function() {

    Route::get('/', function () {
        return view('/home');
    });

    // Route::get('/', 'HomeController@index')->name('home');
    
    Route::resource('petugas', 'PetugasController');
    Route::resource('vendor', 'VendorController');
    Route::resource('ruangan', 'RuanganController');
    Route::resource('merk', 'MerkController');
    Route::resource('perangkat', 'PerangkatController');
    Route::resource('perangkatout', 'PerangkatOutController');

    Route::get('toolsin', 'ToolsInController@index');
    Route::get('toolsin/export_excel', 'ToolsInController@export_excel');

    Route::get('toolsout', 'ToolsOutController@index');
    Route::get('toolsout/export_excel', 'ToolsOutController@export_excel');

    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();


