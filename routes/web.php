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

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
Route::get('/', [
    'uses' => 'PagesController@index',
    'as'   => 'main'
]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'PagesController@admin')->name('admin');
Route::resource('/farms', 'FarmController', ['as'=>'backend']);
Route::resource('/farmers', 'FarmersController', ['as'=>'backend']);
Route::get('/farms/create/{id}','FarmController@myformAjax');
Route::resource('/produces', 'ProduceController', ['as'=>'backend']);
Route::resource('/preparations', 'PreparationController', ['as'=>'backend']);
Route::resource('/harvestings', 'HarvestingController', ['as'=>'backend']);
Route::resource('/harvests', 'HarvestController', ['as'=>'backend']);
Route::resource('/storages', 'StorageController', ['as'=>'backend']);
Route::resource('/plantings', 'PlantingController', ['as'=>'backend']);
Route::resource('/cultivations', 'CultivationController', ['as'=>'backend']);
Route::get('/produces/create/{id}','ProduceController@myformAjax');
Route::any('record/{id}','RecordsController@details')->name('record');
Route::resource('/plants', 'PlantController', ['as'=>'backend']);
Route::resource('/seeds', 'VarietyController', ['as' => 'backend']);
Route::resource('/reports', 'ReportsController',['as'=>'backend']);
Route::any('/performs/{id}','ReportsController@perform')->name('performance');
Route::put('/profile/{user}', 'ProfileController@update')->name('profile.update');
Route::resource('/account', 'AccountController', ['as' => 'backend'])->except(['store']);
Route::post('/uploadfile', 'ImageController@upload');
Route::resource('/users', 'UsersController',['as'=>'backend']);
Route::get('/profile/{user}/edit', [
    'uses' => 'ProfileController@edit',
    'as'   => 'profile-edit'
]);
Route::any('farm/{id}', 'AdminController@farms')->name('farms');
Route::any('produce/{id}', 'AdminController@produces')->name('produce');
Route::any('edit/{id}', 'AdminController@edit')->name('edit');
Route::any('delete/{id}', 'AdminController@delete')->name('delete');
Route::any('update/{id}', 'AdminController@update')->name('update');
Route::any('editpro/{id}', 'AdminController@editPro')->name('editpro');
Route::any('up_date/{id}', 'AdminController@up_date')->name('up_date');
// Route::any('activate/{id}', 'ActivateController@activate')->name('activate');
// Route::any('deactivate/{id}', 'ActivateController@deactivate')->name('deactivate');
Route::resource('/roles', 'RolesController', ['as' => 'backend']);
Route::resource('/permissions', 'PermissionsController', ['as' => 'backend']);
Route::get('/count', 'PagesController@getCount');
Route::resource('/blogs', 'BlogController',['as'=>'backend']);
Route::get('/markAsRead',function(){
Auth()->user()->unreadNotifications->markAsRead();
return back();
});

});