<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebasController;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', [BebasController::class, 'index']);   // list data
Route::get('/about/{id}', [BebasController::class, 'detail']);

Route::get('/create', [BebasController::class, 'create']); // tampil form
Route::post('/about', [BebasController::class, 'store']);  // simpan data
