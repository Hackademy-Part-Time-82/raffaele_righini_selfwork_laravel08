<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/dettaglio-libro/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/create', [BookController::class, 'create'])->name('books.create');

Route::post('/salva-libro', [BookController::class, 'store'])->name('books.store');
Route::delete('/elimina-libro/{book}', [BookController::class, 'destroy'])->name('books.destroy');

