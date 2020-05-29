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

Route::prefix('v1/posts')->name('posts.')->group(function (){
    Route::get('','PostsController@all')->name('all');
    Route::post('','PostsController@create')->name('create');
    Route::put('{post_id}','PostsController@update')->name('update');
    Route::get('{post_id}','PostsController@getById')->name('get.by.id');
    Route::delete('{post_id}','PostsController@delete')->name('delete');
});
