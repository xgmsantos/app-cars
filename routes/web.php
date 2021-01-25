<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/carros', [App\Http\Controllers\CarsController::class, 'index'])->name('cars.index');
Route::get('/carros/adicionar-novo', [App\Http\Controllers\CarsController::class, 'create'])->name('cars.create');
Route::post('/carros/adicionar-novo/store', [App\Http\Controllers\CarsController::class, 'store'])->name('cars.store');
Route::get('/carros/editar/{id}', [App\Http\Controllers\CarsController::class, 'edit'])->name('cars.edit');
Route::put('/carros/editar/{id}', [App\Http\Controllers\CarsController::class, 'update'])->name('cars.update');
Route::delete('/carros/excluir/{id}', [App\Http\Controllers\CarsController::class, 'destroy'])->name('cars.destroy');

