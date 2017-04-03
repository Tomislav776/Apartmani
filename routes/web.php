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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/apartments/create', 'ApartmentController@create')->name('apartments.create');
    Route::post('/apartments/store', 'ApartmentController@store')->name('apartments.store');
});

//Route::get('/admin', 'AdminController@index')->name('index');

Route::get('/admin', ['uses' => 'AdminController@index',]);
Route::get('/admin/moderator', ['as' => 'admin.moderator', 'uses' => 'AdminController@getModeratorData']);
Route::get('/admin/{apartment}', ['as' => 'admin.moderator.apartment', 'uses' => 'AdminController@showApartment']);

Route::post('/admin/{apartment}/response', 'AdminController@getApartmentResponse');



//Route::get('/admin', 'AdminController@getAllApartments')->name('index');













Route::get('/test', ['as' => 'test', 'uses' => 'AdminController@test']);