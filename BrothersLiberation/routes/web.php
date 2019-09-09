<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/leden', 'ledencontroller@leden');

Route::get('/nieuwlid', 'ledencontroller@nieuwlidpage');

