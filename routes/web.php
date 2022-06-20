<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Products;
use App\Http\Livewire\Categorias;
use App\Http\Livewire\Carrito;

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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/producto', function () {
    return view('dashboard');
})->name('producto');
Route::middleware(['auth:sanctum', 'verified'])->get('/carrito', [Carrito::class,'render'])
->name('carrito');
Route::middleware(['auth:sanctum', 'verified'])->get('/carrito-{id}', [Products::class,'enviar']);
Route::middleware(['auth:sanctum', 'verified'])->get('/factura', function () {
    return view('livewire/pages/factura');
})->name('factura');
Route::post('/registro',[Carrito::class,'guardar'])->name('registros');
Route::get('/products-{id}',[Products::class,'render']);
Route::get('/categorias',[Categorias::class,'render']);
Route::get('/reporte',[Carrito::class,'factura']);

