<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [\App\Http\Controllers\LevelController::class, 'index']);
Route::get('/kategori', [\App\Http\Controllers\KategoriController::class, 'index']);
Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('/user');
Route::get('/user/tambah', [\App\Http\Controllers\UserController::class, 'tambah'])->name('/user/tambah');
Route::post('/user/tambah_simpan', [\App\Http\Controllers\UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
Route::get('/user/ubah/{id}', [\App\Http\Controllers\UserController::class, 'ubah'])->name('/user/ubah');
Route::put('/user/ubah_simpan/{id}', [\App\Http\Controllers\UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');
Route::get('/user/hapus/{id}', [\App\Http\Controllers\UserController::class, 'hapus'])->name('/user/hapus');;
