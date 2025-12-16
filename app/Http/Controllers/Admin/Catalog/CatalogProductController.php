<?php

namespace App\Http\Controllers\Admin\catalog;

use App\Http\Controllers\Controller;
use App\Models\CatalogCategory;
use App\Models\CatalogProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogProductController extends Controller
{

public function index()
{
    $products = CatalogProduct::with('category')
        ->latest()
        ->get();

    return view('admin.productcatalog.index', compact('products'));
}


  public function create()
{
    $categories = CatalogCategory::where('status', 1)->get(['id', 'title']);
    return view('admin.productcatalog.create', compact('categories'));
}


public function store(Request $request)
{
    $request->validate([
        'category_id' => 'required|exists:catalog_categories,id',
        'url' => 'nullable|url',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        'status' => 'required|boolean',
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('catalog-products', 'public');
    }

    CatalogProduct::create([
        'category_id' => $request->category_id,
        'url' => $request->url,
        'image' => $imagePath,
        'status' => $request->status,
    ]);

    return redirect()->route('admin.website.catalog.product')->with('success', 'Catalog Product Created Successfully');
}

public function edit($id)
{
    $product = CatalogProduct::findOrFail($id);

    $categories = CatalogCategory::where('status', 1)
        ->get(['id', 'title']);

    return view('admin.productcatalog.edit', compact('product', 'categories'));
}

public function update(Request $request, $id)
{
    $product = CatalogProduct::findOrFail($id);

    $request->validate([
        'category_id' => 'required|exists:catalog_categories,id',
        'url' => 'nullable|url',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        'status' => 'required|boolean',
    ]);

    // Image update
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('catalog-products', 'public');
        $product->image = $imagePath;
    }

    $product->update([
        'category_id' => $request->category_id,
        'url' => $request->url,
        'status' => $request->status,
    ]);

    return redirect()
        ->route('admin.website.catalog.product')
        ->with('success', 'Catalog Product Updated Successfully');
}


public function destroy($id)
{
    $product = CatalogProduct::findOrFail($id);

    if ($product->image && Storage::disk('public')->exists($product->image)) {
        Storage::disk('public')->delete($product->image);
    }

    $product->delete();

    return redirect()
        ->route('admin.website.catalog.product')
        ->with('success', 'Catalog Product deleted successfully');
}



}