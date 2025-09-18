<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.admin.categories.index', compact('categories'));
    }
    public function create()
    {
        return view('pages.admin.categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'nullable',
        ]);

        Category::create($request->only(['name', 'description']));

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category created successfully');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('pages.admin.categories.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
            'description' => 'nullable',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->only(['name', 'description']));

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category updated successfully');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category deleted successfully');
    }
}
