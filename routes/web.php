<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\HomeController;

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
})->name('welcome')->middleware('guest');

Route::post('login', function () {
    return redirect('buscar');
})->name('login');

Route::get('buscar', [RegisterController::class, 'index'])->name('register.index');
Route::get('registros/{id}', [RegisterController::class, 'show'])->name('register.details');
Route::get('registrar', [RegisterController::class, 'create'])->name('register.create');
Route::put('registros/{id}', [RegisterController::class, 'update'])->name('register.update');
Route::post('registros', [RegisterController::class, 'store'])->name('register.store');
