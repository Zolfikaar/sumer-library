<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::with(['books'])->orderBy('id','DESC')->get();
        return view('authors.index', compact('authors'));
    }

    public function create() {
        return view('authors.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string',
            'bio' => 'string|nullable'
        ]);


        $request = Author::create([
            'name' => $request->input('name'),
            'bio' => $request->input('bio')
        ]);


        return redirect()->route('authors.index')->with('message', 'Author Added Successfully');
    }

    public function edit($id) {
        $author = Author::findOrFail($id);

        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id) {
        $author = Author::findOrFail($id);

        $author->update($request->all());

        return redirect()->route('authors.index')->with('message', 'Author Updated Successfully');
    }

    public function delete($id) {
        $author = Author::findOrFail($id);

        $author->delete();

        return redirect()->route('authors.index')->with('message', 'Author Deleted Successfully');
    }
}
