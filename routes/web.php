<?php

Route::get('/', 'SistemaController@index');

Route::get('/users', 'UserController@index');

Route::get('/register', 'UserController@register');