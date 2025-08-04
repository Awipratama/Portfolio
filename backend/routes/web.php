<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/table', [TableController::class, 'table'])->name('table');
