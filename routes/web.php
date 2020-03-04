<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RoutepermissionProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [
    'uses' => 'PagesController@index',
    'as'   => 'main'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/farms', 'FarmController', ['as'=>'backend']);
Route::resource('/produces', 'ProduceController', ['as'=>'backend']);
Route::resource('/preparations', 'PreparationController', ['as'=>'backend']);
Route::resource('/harvestings', 'HarvestingController', ['as'=>'backend']);
Route::resource('/storages', 'StorageController', ['as'=>'backend']);
Route::resource('/plantings', 'PlantingController', ['as'=>'backend']);
Route::get('/produces/create/{id}','ProduceController@myformAjax');
Route::any('record/{id}','RecordsController@details')->name('record');


