<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/carros/adicionar-novo', [App\Http\Controllers\CarsController::class, 'add'])->name('cars.add');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
