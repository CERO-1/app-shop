<?php

//borramos la funcion 
Route::get('/', 'TestController@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
