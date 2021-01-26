<?php

use Illuminate\Support\Facades\Route;

// Route::get('/paisos.xml', 'baseController@index');

Route::get('/base.xml', 'baseController@base')->name('base');

Route::get('/estil.xml', 'baseController@estil');

Route::get('/esquema.xml', 'baseController@esquema');

Route::get('/if.xml', 'baseController@if');

Route::get('/javascript.html', 'baseController@javascript');
