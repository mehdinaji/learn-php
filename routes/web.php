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

Route::get('/search', function (Request $request) {
    $query = $request->input('q');

    if (!$query) {
        return response()->json([
            'message' => 'لطفا یک عبارت جستجو وارد کنید.'
        ], 400);
    }

    $items = json_decode(file_get_contents(storage_path('items.json')), true) ?? [];

    $results = array_filter($items, function ($item) use ($query) {
        return stripos($item['title'], $query) !== false;
    });

    return response()->json(array_values($results));
});