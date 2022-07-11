<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/tamu', [App\Http\Controllers\TamuController::class, 'index'])->name('tamu')->middleware('auth');
Route::post('/tamu/create', [App\Http\Controllers\TamuController::class, 'create'])->name('tamu');
Route::get('/tamu/{id}/edit', [App\Http\Controllers\TamuController::class, 'edit'])->name('tamu')->middleware('auth');
Route::post('/tamu/{id}/update', [App\Http\Controllers\TamuController::class, 'update'])->name('tamu');
Route::get('/tamu/delete/{id}', [App\Http\Controllers\TamuController::class, 'delete'])->name('tamu')->middleware('auth');


