<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Controller;

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
    return view('home.home');
});

Route::get('/registerData', [Controller::class, 'viewRegisterData'])->name('registerData');
Route::get('/productoTienda/{id_tienda}', [ProductoController::class, 'productoTienda']);
Route::get('/listProductos/{id_tienda}', [ProductoController::class, 'listProductos']);

Route::resource('tiendas', TiendaController::class);
Route::resource('productos', ProductoController::class);
