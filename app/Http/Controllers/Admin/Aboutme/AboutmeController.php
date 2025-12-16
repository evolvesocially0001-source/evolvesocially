<?php

namespace App\Http\Controllers\Admin\Aboutme;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    public function index()
    {
        $data = Aboutme::all();
        return view('admin.about.index', compact('data'));
    }

    public function create()
    {

        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        if (Aboutme::count() > 0) {
            return redirect()->route('admin.aboutpage.index')
                ->with('error', 'Entry already exists. Please edit or delete the existing one.');
        }

        $request->validate([
            'heading' => 'required|string',
            'paragraph' => 'required|string'
        ]);

        Aboutme::create([
            'heading' => $request->heading,
            'paragraph' => $request->paragraph,
        ]);

        return redirect()->route('admin.aboutpage.index')
            ->with('success', 'About Me section added successfully!');
    }

    public function edit($id)
    {
        $item = Aboutme::findOrFail($id);
        return view('admin.about.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required|string',
            'paragraph' => 'required|string'
        ]);

        $item = Aboutme::findOrFail($id);

        $item->update([
            'heading' => $request->heading,
            'paragraph' => $request->paragraph,
        ]);

        return redirect()->route('admin.aboutpage.index')
            ->with('success', 'About Me updated successfully!');
    }

    public function destroy($id)
    {
        $item = Aboutme::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.aboutpage.index')
            ->with('success', 'About Me entry deleted successfully!');
    }
}