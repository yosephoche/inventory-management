<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/etalase', [HomeController::class, 'etalase'])->name('home.etalase');
Route::get('/', [HomeController::class, 'index'])->name('home.index');

