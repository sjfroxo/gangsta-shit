<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('main.index');

Route::get('/category/{category}', [ItemController::class, 'index'])->name('category.show');

Route::prefix('category')->group(function() {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::patch('/{category}', [CategoryController::class, 'update'])->name('category.update');
});

Route::prefix('item')->group(function() {
    Route::get('/create', [ItemController::class, 'create'])->name('item.create');
    Route::post('/', [ItemController::class, 'store'])->name('item.store');
    Route::delete('/{slug}', [ItemController::class, 'destroy'])->name('item.destroy');
    Route::get('/{slug}/edit', [ItemController::class, 'edit'])->name('item.edit');
    Route::patch('/{slug}', [ItemController::class, 'update'])->name('item.update');
    Route::get('/{slug}', [ItemController::class, 'show'])->name('item.show');
});
