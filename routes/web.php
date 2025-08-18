<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard'); // kalau sudah login
    }
    return redirect('/login'); // kalau belum login
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
