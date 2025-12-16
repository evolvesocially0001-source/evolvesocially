<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index(){
        return view('admin.setting.setting');
    }

    // -----------------------------
    // UPDATE PASSWORD (AJAX)
    // -----------------------------
   public function updatePassword(Request $request)
{
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|min:6|confirmed'
    ]);

    $admin = Auth::guard('admin')->user();

    if (!Hash::check($request->old_password, $admin->password)) {
        return response()->json([
            'status' => 'error',
            'message' => 'Old password does not match!'
        ]);
    }

    $admin->password = Hash::make($request->new_password);
    $admin->save();

    return response()->json([
        'status' => 'success',
        'message' => 'Password updated successfully!'
    ]);
}


    // -----------------------------
    // UPDATE EMAIL (AJAX)
    // -----------------------------
    public function updateEmail(Request $request)
    {
        $request->validate([
            'old_email' => 'required|email',
            'new_email' => 'required|email|unique:admins,email,' . Auth::guard('admin')->id(),
        ]);

        $admin = Auth::guard('admin')->user();

        // Check old email match
        if ($request->old_email !== $admin->email) {
            return response()->json([
                'status' => 'error',
                'message' => 'Old email does not match!'
            ]);
        }

        // Update new email
        $admin->email = $request->new_email;
        $admin->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Email updated successfully!'
        ]);
    }
}