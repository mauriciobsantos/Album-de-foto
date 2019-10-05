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

Route::get('/', 'PostControlador@index');
Route::post('/', 'PostControlador@store');
Route::delete('/{id}', 'PostControlador@destroy');
Route::get('/download/{id}', 'PostControlador@download');
