<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\WelcomeController;
Route::get('/', [WelcomeController::class, 'index']);