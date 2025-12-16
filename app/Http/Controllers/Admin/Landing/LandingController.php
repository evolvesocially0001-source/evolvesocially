<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Models\LandingBannerText;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $items = LandingBannerText::latest()->get();
        return view('admin.categories.index', compact('items'));
    }

    public function create(){
        return view('admin.categories.create'); // your form page
    }

public function store(Request $request)
{
    // Block storing if an entry already exists
    if (LandingBannerText::count() >= 1) {
        return redirect()->route('admin.landing.index')
            ->with('error', 'Cannot create more than 1 entry.');
    }

    $request->validate([
        'text1' => 'required',
        'text2' => 'required',
        'text3' => 'required',
        'pera1' => 'required',
        'pera2' => 'required',
    ], [
        'required' => 'Please fill all input boxes.'
    ]);

    LandingBannerText::create($request->only([
        'text1', 'text2', 'text3',
        'pera1', 'pera2', 'pera3'
    ]));

    return redirect()->route('admin.landing.index')
                     ->with('success', 'Landing Banner Content Created Successfully!');
}



    public function edit($id) {
        $item = LandingBannerText::findOrFail($id);
        return view('admin.categories.edit', compact('item'));
    }

public function update(Request $request, $id)
{
    $request->validate([
        'text1' => 'required',
        'text2' => 'required',
        'text3' => 'required',
        'pera1' => 'required',
        'pera2' => 'required',
    ], [
        'required' => 'Please fill all input boxes.'
    ]);

    $item = LandingBannerText::findOrFail($id);
    $item->update($request->all());

    return redirect()->route('admin.landing.index')
                     ->with('success', 'Landing Banner Updated Successfully!');
}


    public function destroy($id)
{
    $item = LandingBannerText::findOrFail($id);
    $item->delete();

    return redirect()->route('admin.landing.index')
                     ->with('success', 'Deleted Successfully!');
}

}