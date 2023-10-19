<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::with(['books'])->get();
        return view('categories.index', compact('categories'));
    }

    public function create() {
        return view('categories.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string',
            'desc' => 'nullable'
        ]);

        $request = Category::create([
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
        ]);

        return redirect()->route('categories.index')->with('message', 'Category Added Successfully');
    }

    public function edit($id) {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $category = Category::findOrFail($id);

        $category->update($request->all());

        return redirect()->route('categories.index')->with('message', 'Category Updated Successfully');
    }

    public function delete($id) {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('categories.index')->with('message', 'Category Deleted Successfully');
    }
}
