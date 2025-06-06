<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class TodoController extends Controller
{
    public function showList()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/todos');
        $todos = $response->json();

        return view('todos.index', compact('todos'));
    }
    public function show($id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/todos/{$id}");
        $todo = $response->json();

        return view('todos.single', compact('todo'));
    }
}
