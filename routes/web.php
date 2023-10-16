<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PublicController@inicio')->name('public.inicio');
Route::get('/quienes-somos', 'PublicController@quienes_somos')->name('public.quienes_somos');
Route::get('/ministerios', 'PublicController@ministerios')->name('public.ministerios');
Route::get('/eventos', 'PublicController@eventos')->name('public.eventos');
Route::get('/contacto', 'PublicController@contacto')->name('public.contacto');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
