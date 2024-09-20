<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'inicio'])->name('public.inicio');
Route::get('/quienes-somos', [PublicController::class, 'quienes_somos'])->name('public.quienes_somos');
Route::get('/ministerios', [PublicController::class, 'ministerios'])->name('public.ministerios');
Route::get('/eventos', [PublicController::class, 'eventos'])->name('public.eventos');
Route::get('/contacto', [PublicController::class, 'contacto'])->name('public.contacto');

Route::post('/guardar-imagen', [ImagenController::class, 'store'])->name('public.guardar-imagen');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/test', [TestController::class, 'create'])->name('test.create');
Route::post('/test', [TestController::class, 'store'])->name('test.store');
Route::get('/test/{test}', [TestController::class, 'show'])->name('test.show_public')->middleware('signed');


Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard/'], function () {
    Route::get('/test/listar', [TestController::class, 'index'])->name('test.index');
    Route::get('/test/{test}', [TestController::class, 'show'])->name('test.show');
});

