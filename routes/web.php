<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/reservation', [\App\Http\Controllers\ReservationController::class, 'show'])->name('reservation.form');
Route::post('/reservation', [\App\Http\Controllers\ReservationController::class, 'send'])->name('reservation.send');
Route::get('/reservation/annulation', [\App\Http\Controllers\AnnulationController::class, 'annulation'])->name('annulation');

Route::post('/reservation/annulation/{token}', [App\Http\Controllers\AnnulationController::class, 'AnullReserv'])->name('annulation.AnnullReserve');
