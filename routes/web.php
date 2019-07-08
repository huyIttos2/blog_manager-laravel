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