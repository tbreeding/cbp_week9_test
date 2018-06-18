<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('homepage');

Route::get('/hero/{hero}', 'HeroController@show')->name('hero/show');

Route::get('/hero', 'HeroController@index')->name('hero/index');

Route::post('/hero/{hero}', 'HeroController@emergency')->name('hero/newEmergency');

Auth::routes();
