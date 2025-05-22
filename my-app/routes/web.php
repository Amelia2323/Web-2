<?php

use App\Http\Controllers\UnitKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return "Belajar laravel 12 di STT Nurul Fikri 2025";
});

Route::get("/unit-kerja", [UnitKerjaController::class, "index"]);