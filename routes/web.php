<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'baseController@index')->name('index');

Route::get('/base.xml', 'baseController@base')->name('base');

Route::get('/estil.xml', 'baseController@estil')->name('estil');

Route::get('/transformador.xml', 'baseController@transformador')->name('transformador');

Route::get('/esquema.xml', 'baseController@esquema')->name('esquema');

Route::get('/if.xml', 'baseController@if')->name('if');

Route::get('/javascript.html', 'baseController@javascript')->name('javascript');
