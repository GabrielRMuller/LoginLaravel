<?php

Route::get('/', 'SistemaController@index');

Route::get('/users', 'UsuarioController@index');

Route::get('/register', 'UsuarioController@create');

Route::post('/register', 'UsuarioController@store');

Route::get('/logout', 'UsuarioController@destroy');