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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('welcome');
});

// mostrar las pantallas
Route::get('/panel', 'PanelController@inicio');
Route::get('/lista', 'PanelController@lista');
Route::get('/nuevo', 'PanelController@nuevo');
Route::get('/perfil', 'PanelController@perfil');
Route::get('/contactos', 'PanelController@contactos');