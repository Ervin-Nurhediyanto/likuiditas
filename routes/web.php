<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikuitController;
use App\Http\Controllers\DashboardController;

Route::get('/adminlte', function () { return view('adminlte/index'); });

// Route::get('/', [DashboardController::class, 'login'])->name('login');
// Route::get('dashboard', [DashboardController::class, 'index'])->name('dashbord')->middleware('auth');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('dashboard', [DashboardController::class, 'lte'])->name('dashboard');

Route::resource('likuit', LikuitController::class);
