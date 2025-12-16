<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Controller;
use App\Models\CatalogCategory;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $categories = CatalogCategory::latest()->get();
        return view('admin.catalog.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.catalog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|mimes:jpg,jpeg,png,webp',
            'status' => 'required'
        ]);

        $data = $request->all();

        // IMAGE UPLOAD
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('catalog/category', 'public');
        }

        CatalogCategory::create($data);

        return redirect()
            ->route('admin.website.catalog')
            ->with('success', 'Category created successfully!');
    }

    public function edit($id)
{
    $category = CatalogCategory::findOrFail($id);
    return view('admin.catalog.edit', compact('category'));
}

public function update(Request $request, $id)
{
    $category = CatalogCategory::findOrFail($id);

    $data = $request->only('title', 'link', 'status');

    if ($request->hasFile('image')) {

        if ($category->image && file_exists(storage_path('app/public/' . $category->image))) {
            unlink(storage_path('app/public/' . $category->image));
        }

        $data['image'] = $request->file('image')->store('catalog/category', 'public');
    }

    $category->update($data);

    return redirect()->route('admin.website.catalog')
                     ->with('success', 'Category updated successfully!');
}


public function destroy($id)
{
    $category = CatalogCategory::findOrFail($id);

    // Delete image from storage
    if ($category->image && file_exists(storage_path('app/public/' . $category->image))) {
        unlink(storage_path('app/public/' . $category->image));
    }

    // Delete record
    $category->delete();

    return response()->json([
        'status' => 'success',
        'message' => 'Category deleted successfully!'
    ]);
}

}