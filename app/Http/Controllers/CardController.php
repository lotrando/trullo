<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function store(Request $request)
    {
        Card::create($request->validate([
            'category_id' => ['required'],
            'text'        => ['required'],
        ]));
        return to_route('index');
    }

    public function destroy($id)
    {
        Card::findOrFail($id)->delete();
        return to_route('index');
    }
}
