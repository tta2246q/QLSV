<?php

namespace App\Http\Controllers;
use App\Models\Brand;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $totalBrands = $brands->count();
        return view('pages.admin.brand.index', compact('brands'));
    }
    public function create()
    {
        return view('pages.admin.brand.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands,name',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('brands', 'public');
        }

        Brand::create($data);

        return redirect()->route('admin.brands.index')
            ->with('success', 'Brand created successfully');
    }
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('pages.admin.brand.edit', compact('brand'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:brands,name,' . $id,
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);

        $brand = Brand::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('brands', 'public');
        }

        $brand->update($data);

        return redirect()->route('admin.brands.index')
            ->with('success', 'Brand updated successfully');
    }
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->route('admin.brands.index')
            ->with('success', 'Brand deleted successfully');
    }
}