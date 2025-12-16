<?php

namespace App\Http\Controllers\Website\Catalog;

use App\Http\Controllers\Controller;
use App\Models\LogoCatalog;

class LogoCatalogController extends Controller
{
   public function index()
{
    $logos = LogoCatalog::where('status', 1)->orderBy('id', 'ASC')->get();
    return view('Website.Catalog.logo_catalog', compact('logos'));
}

}