<?php

use App\Http\Controllers\Per_dateController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\per_stateController;
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

Route::get('/', [ReportController::class, 'index']
);


Route::get('/per_date', [Per_dateController::class, 'per_date']
)->name('per_date');

Route::get('/per_state', [Per_stateController::class, 'per_state'])->name('per_state');
