<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ExamenController;
use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/clientes', ClienteController::class);
Route::resource('/examens', ExamenController::class);
Route::resource('/categorias', CategoriaController::class);
//Route::get('/categorias/{categoria}/examens', CategoriaController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
