<?php


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/editproduct/{product}', 'webshopcontroller@edit');
Route::post('/updateproduct/{product}', 'webshopcontroller@update');



//galerij
Route::get('/galerij', 'galerijcontroller@galerij');
Route::get('/galerij/{foto}', 'galerijcontroller@fotodetail');
Route::get('/comments/{comment}', 'galerijcontroller@comment');
Route::get('/newcomment/{foto}', 'galerijcontroller@newcommentpage');
Route::post('/addcomment/{foto}', 'galerijcontroller@addcomment');



//order
Route::get('/order', 'webshopcontroller@order');
Route::get('/email', 'EmailController@sendEMail');


//agenda
Route::get('/agenda', 'AgendaController@agendapagina');
Route::get('/nieuweactiviteit', 'AgendaController@nieuwact');

//cart
Route::get('/cart', 'webshopcontroller@cartindex');
Route::get('/addtocart/{product}', 'webshopcontroller@addtocart');
Route::get('/clearcart', 'webshopcontroller@clearcart');
Route::get('/removeitem/{id}', 'webshopcontroller@removeitem');



