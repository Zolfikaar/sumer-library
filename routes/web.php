<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

Route::view('/', 'welcome');


Route::group(['middleware' => 'auth:admin', 'verified', 'prefix' => '/admin'],function() {
    Route::view('/dashboard','admin.dashboard')->name('dashboard');

    Route::controller(BookController::class)->group(function () {
        Route::get('/books', 'index')->name('books.index');
        Route::get('/books/create', 'create')->name('books.create');
        Route::post('/books/store', 'store')->name('books.store');
        Route::get('/books/edit/{id}', 'edit')->name('books.edit');
        Route::put('/books/update/{id}', 'update')->name('books.update');
        Route::delete('/books/delete/{id}', 'delete')->name('books.delete');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/categories', 'index')->name('categories.index');
        Route::get('/categories/create', 'create')->name('categories.create');
        Route::post('/categories/store', 'store')->name('categories.store');
        Route::get('/categories/edit/{id}', 'edit')->name('categories.edit');
        Route::put('/categories/update/{id}', 'update')->name('categories.update');
        Route::delete('/categories/delete/{id}', 'delete')->name('categories.delete');
    });

    Route::controller(AuthorController::class)->group(function () {
        Route::get('/authors', 'index')->name('authors.index');
        Route::get('/authors/create', 'create')->name('authors.create');
        Route::post('/authors/store', 'store')->name('authors.store');
        Route::get('/authors/edit/{id}', 'edit')->name('authors.edit');
        Route::put('/authors/update/{id}', 'update')->name('authors.update');
        Route::delete('/authors/delete/{id}', 'delete')->name('authors.delete');
    });
    Route::controller(AuthorController::class)->group(function () {

    });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/adminauth.php';
