<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function showForm()
    {
        return view('form');
    }

    public function handleForm(Request $request)
    {
        $name = $request->input('name');
        return view('hello', ['name' => $name]);
    }
}