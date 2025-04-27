<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        if (!$query) {
            return response()->json([
                'message' => 'Please search for a phrase...'
            ], 400);
        }

        $items = json_decode(file_get_contents(storage_path('items.json')), true) ?? [];

        $results = array_filter($items, function ($item) use ($query) {
            return stripos($item['title'], $query) !== false;
        });

        return response()->json(array_values($results));
    }
}
