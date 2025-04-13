<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\WelcomeController;
Route::get('/', [WelcomeController::class, 'index']);

Route::get('/form', [WelcomeController::class, 'showForm']);
Route::post('/form', [WelcomeController::class, 'handleForm']);