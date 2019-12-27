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


Route::group(['prefix'=>'pages'], function(){
    Route::get('index', 'PagesController@getIndex');

    Route::get('tintuc', 'PagesController@getTintuc');

    Route::get('thanhtoan', 'PagesController@getThanhtoan');

    Route::get('register', 'PagesController@getRegister');
    Route::get('login', 'PagesController@getLogin');

    Route::get('phukien', 'PagesController@getPhukien');

    Route::get('mauxe', 'PagesController@getMauxe');

    Route::get('lienhe', 'PagesController@getLienhe');

    Route::get('chitiet', 'PagesController@getChitiet');

    Route::get('cart', 'PagesController@getCar');

    
});