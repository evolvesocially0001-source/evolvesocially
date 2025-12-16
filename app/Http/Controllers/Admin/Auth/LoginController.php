<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $admin = \App\Models\Admin::where('email', $request->email)->first();

        if (!$admin) {
            return back()->with('error', 'Invalid credentials!');
        }

        if (!Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Incorrect password!');
        }

        Auth::guard('admin')->login($admin);

        // 🔥 Success Toast Flash
        return redirect()->route('admin.dashboard')->with('success', 'Welcome Admin!');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Logged out successfully!');
    }
}