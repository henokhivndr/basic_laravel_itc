<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebasController;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', [BebasController::class, 'index']);
Route::get('/about/{id}', [BebasController::class, 'detail']);