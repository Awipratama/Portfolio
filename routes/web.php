<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwardController;

Route::get('/', [AwardController::class, 'index']);

Route::get('/dashboardv1', function () {
    return view('dashboardv1');
});
Route::get('/dashboardv3', function () {
    return view('dashboardv3');
});
