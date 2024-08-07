<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/torefs', function () {
    return inertia('Torefs');
});

Route::get('/', function () {
    $categories = Category::with('cards')->get();
    return inertia('Home', compact('categories'));
})->name('index');

Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::delete('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

Route::post('card/store', [CardController::class, 'store'])->name('card.store');
Route::delete('card/delete/{id}', [CardController::class, 'destroy'])->name('card.delete');
