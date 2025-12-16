<?php

namespace App\Http\Controllers\Website\About;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Get the first About Me entry
        $about = Aboutme::first();

        // Send to view
        return view('Website.Home.About', compact('about'));
    }
}