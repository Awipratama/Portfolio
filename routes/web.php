<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwardController;

Route::get('/', [AwardController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
});
