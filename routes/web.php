<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plantas', function () {
    return view('plantas');
});

Route::get('/plants', [PlantsController::class, 'index'])->name('plants.index');
Route::get('/plants/create', [PlantsController::class, 'create'])->name('plants.create');
Route::post('/plants', [PlantsController::class, 'store'])->name('plants.store');
