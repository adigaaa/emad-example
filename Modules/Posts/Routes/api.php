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

Route::prefix('v1/posts')->group(function (){
    Route::get('','PostsController@all');
    Route::post('','PostsController@create');
    Route::put('{post_id}','PostsController@update');
    Route::get('{post_id}','PostsController@getById');
    Route::delete('{post_id}','PostsController@delete');
});
