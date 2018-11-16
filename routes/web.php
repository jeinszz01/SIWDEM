<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin', function(){
  return view('admin.dashboard');
});

Route::get('/reseña', function () {
    return view('informacion.reseña');
})->name('reseña');

Route::get('/municipalidad', function () {
    return view('informacion.municipalidad');
})->name('municipalidad');
