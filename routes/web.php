<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');
Route::get("/users", [PelangganController::class, 'index']);
Route::post("/order", [PesananController::class, 'index']);
Route::put("users", [PelangganController::class, 'update']);
