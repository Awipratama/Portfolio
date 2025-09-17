<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AwardController;

Route::get('/', [PortfolioController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::view('/dashboardv1', 'dashboardv1')->name('dashboardv1');
    Route::view('/dashboardv3', 'dashboardv3')->name('dashboardv3');
    Route::resource('awards', AwardController::class);
});
