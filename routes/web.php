<?php



Route::get('/', function () {
    return view('app');
});

Route::post('/to-do-list','PageController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
