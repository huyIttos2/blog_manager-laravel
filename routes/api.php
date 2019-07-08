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
Route::group(['prefix' => 'blogs'],function(){
    route::get('/','BlogController@index')->name('blogs.index');
    route::get('/create','BlogController@create')->name('blogs.create');
    route::post('/create','BlogController@store')->name('blogs.store');
//    route::get('/show/{id}','BlogController@show')->name('blogs.show');
    route::get('/edit/{id}','BlogController@edit')->name('blogs.edit');
    route::post('/update/{id}','BlogController@update')->name('blogs.update');
    route::get('/delete/{id}','BlogController@delete')->name('blogs.delete');
    route::get('/destroy/{id}','BlogController@destroy')->name('blogs.destroy');
});