<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;


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

Route::get('/', [InformasiController::class, 'index'])->name('home');
Route::get('/prestasi', [InformasiController::class, 'createPrestasi'])->name('prestasi');
Route::post('/prestasi', [InformasiController::class, 'prestasiStore'])->name ('prestasi.store');
Route::get('/updatePrestasi/{id}', [InformasiController::class, 'editPrestasi'])->name('edit.prestasi');
Route::post('/updatePrestasi/{id}', [InformasiController::class, 'updatePrestasi'])->name ('update.prestasi');
Route::delete('/delete/{id}', [InformasiController::class, 'destroyPrestasi'])->name ('destroy.prestasi');




