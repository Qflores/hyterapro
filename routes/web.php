<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.login');
});

Route::get('dashboard', function () {
    return view('home.index');
})->middleware('auth')->name('dashboard');


Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'validar'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('proyecto', ProyectoController::class)->middleware('auth')->names('proyecto');
Route::resource('cliente', SupplierController::class)->middleware('auth')->names('cliente');
Route::resource('componente', ComponentController::class)->middleware('auth')->names('componente');
