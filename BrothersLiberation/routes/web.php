<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/leden', 'ledencontroller@leden');
Route::get('/lid/{user}', 'ledencontroller@lid');

Route::get('/nieuwlid', 'ledencontroller@nieuwlidpage');
Route::post('/adduser', 'ledencontroller@store');


