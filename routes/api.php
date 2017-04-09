<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/admin/moderator', ['as' => 'admin.moderator', 'uses' => 'AdminController@getModeratorData']);
Route::get('/admin/usersDatatables', ['as' => 'admin.usersDatatables', 'uses' => 'AdminController@getUsersData']);

Route::get('/admin/usersDatatables/{user}/active-ads/{adType}', ['as' => 'admin.usersDatatables.activeAds', 'uses' => 'AdminController@getUsersActiveAds']);
