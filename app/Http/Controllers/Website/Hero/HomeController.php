<?php

namespace App\Http\Controllers\Website\Hero;

use App\Http\Controllers\Controller;
use App\Models\LandingBannerText;
use App\Models\Whoweare;

class HomeController extends Controller
{
    public function index()
{
    $hero = LandingBannerText::first();  
    $who  = Whoweare::first(); 

    return view('Website.Home.Landing', compact('hero', 'who'));
}

}