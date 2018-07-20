<?php

Route::get('/', 'SistemaController@index');

Route::get('/users', 'UsuarioController@index');

Route::get('/register', 'UsuarioController@create');

Route::post('/register', 'UsuarioController@store');

Route::get('/logout', 'SistemaController@destroy');

Route::get('/login', 'SistemaController@create');

Route::post('/login', 'SistemaController@store');