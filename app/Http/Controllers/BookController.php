<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Requests\StoreBookRequest;


class BookController extends Controller {

    public function index(): View {
        $books = Book::with(['author', 'category'])->orderBy('id','DESC')->get();
        return view('books.index', compact('books'));
    }

    public function create(): view {
        $authors = Author::get();
        $categories = Category::get();
        return view('books.create', compact('authors', 'categories'));
    }

    public function store(StoreBookRequest $request){

        Book::create([
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'cover' => $request->input('cover'),
            'buy_price' => $request->input('buy_price'),
            'sell_price' => $request->input('sell_price'),
            'count' => $request->input('count'),
            'author_id' => $request->input('author'),
            'category_id' => $request->input('category'),
            'year' => $request->input('year'),
        ]);


        return redirect()->route('books.index')->with('message', 'Book Added Successfully');
    }

    public function edit($id): view {
        $book = Book::findOrFail($id);
        $authors = Author::get();
        $categories = Category::get();
        return view('books.edit', compact('book','authors', 'categories'));
    }

    public function update(StoreBookRequest $request, $id) {
        $book = Book::findOrFail($id);

        $book->update($request->all());

        return redirect()->route('books.index')->with('message', 'Book Updated Successfully');
    }

    public function delete($id) {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect()->route('books.index')->with('message', 'Book Deleted Successfully');
    }
}

