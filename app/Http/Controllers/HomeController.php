<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPackages = TravelPackage::where('is_featured', true)
            ->take(3)
            ->get();

        return view('home', compact('featuredPackages'));
    }
}
