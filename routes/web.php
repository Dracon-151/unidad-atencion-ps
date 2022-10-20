<?php

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
    return redirect('dashboard');
})->name('login');

Route::get('dashboard', function () {
    return view('admin.dashboard'); 
});

Route::get('reset-password/{token}/{email}', function () {
    return view('reset-password');
})->name('password.reset');

Route::middleware(['auth'])->group(function () {

    Route::group(['middleware' => ['role:Administrador']], function () {

        //Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    
    });
});