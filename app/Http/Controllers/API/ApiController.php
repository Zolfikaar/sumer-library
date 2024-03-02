<?php

namespace App\Http\Controllers\API;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index() {
        return response()->json([
            'message' => 'Welcome to Sumer Library API',
            'status' => 'success',
        ]);
    }

    public function books() {
        $books = Book::all();
        return response()->json($books, 200);
    }

    public function show_book(Book $book) {
        return $book;
    }
}
