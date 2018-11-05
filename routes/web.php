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


Route::get('/', 'BaseController@index');

// slider Route start
Route::get('/slider/create', 'sliderController@create')->name('slider.create');
Route::post('/slider/create', 'sliderController@store')->name('slider.store');
Route::get('/slider/manage', 'sliderController@index')->name('slider.manage');
Route::get('/slider/edit/{id}', 'sliderController@edit')->name('slider.edit');
Route::post('/slider/update/{id}', 'sliderController@update')->name('slider.update');
Route::get('/slider/delete/{id}', 'sliderController@destroy')->name('slider.destroy');

// slider Route ends

// Logo Route start
Route::get('/logo/create', 'LogoController@create')->name('logo.create');
Route::post('/logo/create', 'LogoController@store')->name('logo.store');
Route::get('/logo/manage', 'LogoController@index')->name('logo.manage');
Route::get('/logo/edit/{id}', 'LogoController@edit')->name('logo.edit');
Route::post('/logo/update/{id}', 'LogoController@update')->name('logo.update');
Route::get('/logo/delete/{id}', 'LogoController@destroy')->name('logo.destroy');

// Logo Route ends





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
