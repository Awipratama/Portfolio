<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\AuthController;

Route::get('/', [AwardController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/dashboardv1', function () {
    return view('dashboardv1');
})->middleware('auth')->name('dashboardv1');