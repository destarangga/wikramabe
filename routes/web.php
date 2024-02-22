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

Route::get('/admin', [InformasiController::class, 'admin'])->name('home');
Route::get('/login', [InformasiController::class, 'login'])->name('login');
Route::get('/', [InformasiController::class, 'index'])->name('landing');
Route::post('/login', [InformasiController::class, 'auth'])->name('login.dongs');
Route::get('/create', [InformasiController::class, 'create'])->name('create');
Route::get('/prestasi', [InformasiController::class, 'prestasi'])->name('prestasi');
Route::post('/prestasistore', [InformasiController::class, 'prestasiStore'])->name ('prestasi.store');
Route::get('/updatePrestasi/{id}', [InformasiController::class, 'editPrestasi'])->name('edit.prestasi');
Route::post('/updatePrestasi/{id}', [InformasiController::class, 'updatePrestasi'])->name ('update.prestasi');
Route::delete('/delete/{id}', [InformasiController::class, 'destroyPrestasi'])->name ('destroy.prestasi');