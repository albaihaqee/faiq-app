<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;

Route::get('/', function () {
    return view('belajar');
});

Route::get('/halaman2', [BelajarController::class, 'halaman2']);