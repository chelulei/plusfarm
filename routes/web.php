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
Route::resource('/plants', 'PlantController', ['as'=>'backend']);
Route::resource('/seeds', 'VarietyController', ['as' => 'backend']);
Route::put('/profile/{user}', 'ProfileController@update')->name('profile.update');
Route::resource('/account', 'AccountController', ['as' => 'backend'])->except(['store']);
Route::post('/uploadfile', 'ImageController@upload');

Route::get('/profile/{user}/edit', [
    'uses' => 'ProfileController@edit',
    'as'   => 'profile-edit'
]);
Route::any('activate/{id}', 'ActivateController@activate')->name('activate');
Route::any('deactivate/{id}', 'ActivateController@deactivate')->name('deactivate');
Route::resource('/roles', 'RolesController', ['as' => 'backend']);
Route::resource('/permissions', 'permissionsController', ['as' => 'backend']);
