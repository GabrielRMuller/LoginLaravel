<?php

Route::get('/', 'SistemaController@index');

Route::get('/users', 'UsuarioController@index');

Route::get('/register', 'UsuarioController@showRegister');

Route::post('/register', 'UsuarioController@store');