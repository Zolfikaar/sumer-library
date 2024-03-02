<?php

// use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\API\ApiController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [ApiController::class ,'index']);
Route::get('/books', [ApiController::class ,'books']);
Route::get('/books/{book}', [ApiController::class ,'show_book']);
route::get('/authors', [ApiController::class, 'authors']);
route::get('/authors/{author}', [ApiController::class, 'show_author']);
route::get('/categories', [ApiController::class, 'categories']);
route::get('/categories/{category}', [ApiController::class, 'show_category']);
