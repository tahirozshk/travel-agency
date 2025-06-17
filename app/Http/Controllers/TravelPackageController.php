<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class TravelPackageController extends Controller
{
    public function index(Request $request)
    {
        $query = TravelPackage::query();

        // Apply filters
        if ($request->filled('destination')) {
            $query->where('destination', $request->destination);
        }

        if ($request->filled('duration')) {
            [$min, $max] = explode('-', $request->duration);
            if ($max === '+') {
                $query->where('duration_days', '>=', $min);
            } else {
                $query->whereBetween('duration_days', [$min, $max]);
            }
        }

        if ($request->filled('price')) {
            [$min, $max] = explode('-', $request->price);
            if ($max === '+') {
                $query->where('price', '>=', $min);
            } else {
                $query->whereBetween('price', [$min, $max]);
            }
        }

        $packages = $query->paginate(9);
        $destinations = TravelPackage::distinct()->pluck('destination');

        return view('packages.index', compact('packages', 'destinations'));
    }

    public function show(TravelPackage $package)
    {
        return view('packages.show', compact('package'));
    }

    public function book(Request $request, TravelPackage $package)
    {
        $request->validate([
            'travel_date' => 'required|date|after:today',
            'travelers' => 'required|integer|min:1'
        ]);

        // Here you would typically create a booking record
        // Booking::create([...])

        return redirect()->route('packages.show', $package)
            ->with('success', 'Your booking has been submitted successfully!');
    }
}
