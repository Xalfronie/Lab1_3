<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'Inicio']);

Route::get('/Registro', [RegistroController::class, 'registro'])->name('registro');

Route::get('/Login', [LoginController::class, 'loginForm'])->name('login.form'); // Cambio aquí
Route::post('/Login', [LoginController::class, 'login'])->name('login');



Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');

Route::get('/sesionIniciada', function () {
    return view('sesionIniciada');
})->name('sesionIniciada');
