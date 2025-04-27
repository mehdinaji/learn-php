<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\WelcomeController;
Route::get('/', [WelcomeController::class, 'index']);

Route::get('/form', [WelcomeController::class, 'showForm']);
Route::post('/form', [WelcomeController::class, 'handleForm']);

use App\Http\Controllers\TodoController;
Route::get('/todos', [TodoController::class, 'showList']);
Route::get('/todos/{id}', [TodoController::class, 'show']);

use App\Http\Controllers\SearchController;
Route::get('/ser', function () {
    return view('search');
});
Route::get('/search', [SearchController::class, 'search']);