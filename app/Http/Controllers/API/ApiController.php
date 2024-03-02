<?php

namespace App\Http\Controllers\API;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
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

    public function authors() {
        $authors = Author::all();
        return response()->json($authors, 200);
    }

    public function show_author(Author $author) {
        return $author;
    }

    public function categories() {
        $categories = Category::all();
        return response()->json($categories, 200);
    }

    public function show_category(Category $category) {
        return $category;
    }
}
