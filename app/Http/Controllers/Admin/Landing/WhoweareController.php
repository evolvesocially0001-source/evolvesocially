<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Models\Whoweare;
use Illuminate\Http\Request;

class WhoweareController extends Controller
{
    public function index()
    {
        $data = Whoweare::all();
        return view('admin.whoweare.index', compact('data'));
    }

    public function create()
    {
        return view('admin.whoweare.create');
    }

    public function store(Request $request)
    {
        if (Whoweare::count() > 0) {
            return redirect()->route('admin.whoweare.index')
                ->with('error', 'Only one entry is allowed. Please edit or delete the existing one.');
        }

        $request->validate([
            'pera1' => 'required|string',
            'pera2' => 'required|string'
        ]);

        Whoweare::create([
            'pera1' => $request->pera1,
            'pera2' => $request->pera2,
        ]);

        return redirect()->route('admin.whoweare.index')
            ->with('success', 'Who We Are added successfully!');
    }

    // -------------------------
    // EDIT FUNCTION
    // -------------------------
    public function edit($id)
    {
        $item = Whoweare::findOrFail($id);
        return view('admin.whoweare.edit', compact('item'));
    }

    // -------------------------
    // UPDATE FUNCTION
    // -------------------------
    public function update(Request $request, $id)
    {
        $request->validate([
            'pera1' => 'required|string',
            'pera2' => 'required|string'
        ]);

        $item = Whoweare::findOrFail($id);
        $item->update([
            'pera1' => $request->pera1,
            'pera2' => $request->pera2,
        ]);

        return redirect()->route('admin.whoweare.index')
            ->with('success', 'Who We Are updated successfully!');
    }

    // -------------------------
    // DELETE FUNCTION
    // -------------------------
    public function destroy($id)
    {
        $item = Whoweare::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.whoweare.index')
            ->with('success', 'Entry deleted successfully!');
    }
}