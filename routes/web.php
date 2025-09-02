<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorldsController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/worlds', WorldsController::class);

