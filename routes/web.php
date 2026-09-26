<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/profile', [mahasiswaController::class, 'index']);

Route::get('/about', function () {
    return view('page.about');
});

