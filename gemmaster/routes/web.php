<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[ProductoController::class,'productosDisponibles'] )->name('productos-disponibles');
Route::get('/agregar-productos',[ProductoController::class,'agregarProductos'] )->name('agregar-productos');
Route::post('/agregar',[ProductoController::class,'agregar'] )->name('agregar');
Route::get('/edit/{id}',[ProductoController::class,'edit'] )->name('edit');