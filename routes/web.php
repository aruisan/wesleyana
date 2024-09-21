<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\GroupTestController;

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

Route::get('/test/{token_group}/create', [TestController::class, 'create'])->name('test.create');
Route::post('/test', [TestController::class, 'store'])->name('test.store');
Route::get('/test/{test}', [TestController::class, 'show'])->name('test.show_public')->middleware('signed');



Route::get('register', function () {
    return redirect('/'); // Redirigir a la página de inicio o a otra parte
})->name('register');

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard/'], function () {
    //Route::get('/test/listar', [TestController::class, 'index'])->name('test.index');
    Route::get('/test/{test}', [TestController::class, 'show'])->name('test.show');

    Route::get('/group-test', [GroupTestController::class, 'index'])->name('group_test.index');
    Route::post('/group-test', [GroupTestController::class, 'store'])->name('group_test.store');
    Route::get('/group-test/{group}', [GroupTestController::class, 'show'])->name('group_test.show');
    Route::get('/group-test/{group}/active', [GroupTestController::class, 'is_active'])->name('test.active');
});

