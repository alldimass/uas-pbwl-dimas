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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

Route::get('/laundry', [App\Http\Controllers\LaundryController::class, 'index']);
Route::get('/laundry/create', [App\Http\Controllers\LaundryController::class, 'create']);
Route::post('/laundry', [App\Http\Controllers\LaundryController::class, 'store']);
Route::get('/laundry/{id}/edit', [App\Http\Controllers\LaundryController::class, 'edit']);
Route::patch('/laundry/{id}', [App\Http\Controllers\LaundryController::class, 'update']);
Route::delete('/laundry/{id}', [App\Http\Controllers\LaundryController::class, 'destroy']);

