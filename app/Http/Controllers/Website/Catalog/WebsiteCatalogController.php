<?php

namespace App\Http\Controllers\Website\Catalog;

use App\Http\Controllers\Controller;
use App\Models\CatalogCategory;
use App\Models\CatalogProduct;
use Illuminate\Http\Request;

class WebsiteCatalogController extends Controller
{
public function index()
{
    $categories = CatalogCategory::where('status', 1)->orderBy('id', 'ASC')->get();
    return view('Website.Catalog.Website_Catalog', compact('categories'));
}

public function catalogList($slug)
{
    // 1️⃣ slug se category fetch
    $category = CatalogCategory::whereRaw(
        "LOWER(REPLACE(title, ' ', '-')) = ?",
        [$slug]
    )->where('status', 1)->firstOrFail();

    // 2️⃣ us category ki products fetch
    $products = CatalogProduct::where('category_id', $category->id)
        ->where('status', 1)
        ->get();

    // 3️⃣ view ko data bhejo
    return view('Website.Catalog.Website_catalog_list', compact(
        'category',
        'products'
    ));
}

}