<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        Category::create($request->validate([
            'title' => ['required', 'max:50'],
        ]));

        return to_route('index');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return to_route('index');
    }
}
