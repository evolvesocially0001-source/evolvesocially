<?php

namespace App\Http\Controllers\Admin\Logocatalog;

use App\Http\Controllers\Controller;
use App\Models\LogoCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
  public function index()
{
    $logos = LogoCatalog::latest()->get();

    return view('admin.logocatalog.index', compact('logos'));
}

    public function create()
    {
        return view('admin.logocatalog.create');
    }

    // ✅ STORE FUNCTION
    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required|string|max:255',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|boolean',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('logo-catalog', 'public');
        }

        LogoCatalog::create([
            'title'  => $request->title,
            'image'  => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.logo.catalog.product.index')
            ->with('success', 'Logo Category created successfully!');
    }

    public function edit($id)
    {
        $logo = LogoCatalog::findOrFail($id);

        return view('admin.logocatalog.edit', compact('logo'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $logo = LogoCatalog::findOrFail($id);

        $request->validate([
            'title'  => 'required|string|max:255',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|boolean',
        ]);

        // IMAGE UPDATE (optional)
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('logo-catalog', 'public');
            $logo->image = $imagePath;
        }

        $logo->title  = $request->title;
        $logo->status = $request->status;
        $logo->save();

        return redirect()
            ->route('admin.logo.catalog.product.index')
            ->with('success', 'Logo Category updated successfully!');
    }

    public function destroy($id)
{
    $logo = LogoCatalog::findOrFail($id);

    // delete image if exists
    if ($logo->image && Storage::disk('public')->exists($logo->image)) {
        Storage::disk('public')->delete($logo->image);
    }

    $logo->delete();

    return response()->json([
        'status' => true,
        'message' => 'Logo Category deleted successfully!'
    ]);
}
}