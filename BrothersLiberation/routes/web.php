<?php


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/agenda', 'HomeController@agenda');

//leden
Route::get('/leden', 'ledencontroller@leden');
Route::get('/lid/{user}', 'ledencontroller@lid');
Route::get('/nieuwlid', 'ledencontroller@nieuwlidpage');
Route::post('/adduser', 'ledencontroller@store');
Route::get('/editmember/{user}', 'ledencontroller@edit');
Route::get('/updatemember/{user}', 'ledencontroller@update');



//webshop
Route::get('/webshop_on', 'webshopcontroller@webshop_on');
Route::get('/webshop_off', 'webshopcontroller@webshop_off');
Route::get('/webshop', 'webshopcontroller@webshoppage');
Route::get('/product/{product}', 'webshopcontroller@productdetail');
Route::get('/order/{product}', 'webshopcontroller@order');
Route::get('/webshop/filter/{filter}', 'webshopcontroller@filter');
Route::get('/newproduct', 'webshopcontroller@newproduct');
Route::post('/storeproduct', 'webshopcontroller@storeproduct');
Route::delete('/deleteproduct/{product}', 'webshopcontroller@delete');



//galerij
Route::get('/galerij', 'galerijcontroller@galerij');
Route::get('/galerij/{foto}', 'galerijcontroller@fotodetail');
Route::get('/comments/{comment}', 'galerijcontroller@comment');
Route::get('/newcomment/{foto}', 'galerijcontroller@newcommentpage');
Route::post('/addcomment/{foto}', 'galerijcontroller@addcomment');






