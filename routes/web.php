<?php

use App\Http\Controllers\SepedaController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [SepedaController::class, 'index'])->name('home');
// // Route::resource('sepeda', SepedaController::class);
Route::get('/sepeda', [SepedaController::class, 'create'])->name('create');
Route::post('/sepeda', [SepedaController::class, 'store'])->name('store');
Route::get('/sepeda/edit/{id}', [SepedaController::class, 'edit'])->name('edit');
Route::put('/sepeda/update', [SepedaController::class, 'update'])->name('update');

Route::get('/delete/{id}', [SepedaController::class, 'destroy'])->name('delete');

// Home route
Route::get('/', [SepedaController::class, 'index'])->name('home');


