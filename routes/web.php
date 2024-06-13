<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PencapaianController;

use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);
Route::get('/blog/accomplishment', [PencapaianController::class, 'accomplishment']);
Route::get('/blog/about', [TentangController::class, 'about']);
Route::get('/blog/contact', [KontakController::class, 'contact']);
