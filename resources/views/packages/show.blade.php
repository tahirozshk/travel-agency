@extends('layouts.app')

@section('title', $package->name)

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Package Hero Section -->
    <div class="relative rounded-lg overflow-hidden mb-8 h-96">
        <img src="{{ $package->image_path }}" alt="{{ $package->name }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center">
            <div class="px-8">
                <h1 class="text-4xl font-bold text-white mb-4">{{ $package->name }}</h1>
                <div class="flex items-center text-white">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    </svg>
                    {{ $package->destination }}
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Package Details -->
        <div class="md:col-span-2">
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-semibold mb-6">Package Details</h2>
                <p class="text-gray-600 mb-6">{{ $package->description }}</p>
                
                <h3 class="text-xl font-semibold mb-4">Highlights</h3>
                <ul class="list-disc list-inside text-gray-600 mb-6">
                    <li>Professional tour guide throughout the trip</li>
                    <li>Comfortable accommodation in selected hotels</li>
                    <li>All transportation included</li>
                    <li>Daily breakfast and selected meals</li>
                    <li>Entrance fees to all attractions in the itinerary</li>
                </ul>

                <h3 class="text-xl font-semibold mb-4">Itinerary</h3>
                <div class="space-y-4">
                    @for($day = 1; $day <= $package->duration_days; $day++)
                    <div class="border-b border-gray-200 pb-4">
                        <h4 class="font-semibold mb-2">Day {{ $day }}</h4>
                        <p class="text-gray-600">Sample itinerary for day {{ $day }}. This will be replaced with actual itinerary details.</p>
                    </div>
                    @endfor
                </div>
            </div>

            <!-- Reviews Section -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-semibold mb-6">Reviews</h2>
                <!-- Add reviews here -->
            </div>
        </div>

        <!-- Booking Sidebar -->
        <div class="md:col-span-1">
            <div class="bg-white rounded-lg shadow-lg p-6 sticky top-8">
                <div class="text-center mb-6">
                    <span class="text-3xl font-bold text-blue-600">${{ number_format($package->price, 2) }}</span>
                    <span class="text-gray-600">per person</span>
                </div>

                <form action="{{ route('packages.book', $package->id) }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="travel_date" class="block text-sm font-medium text-gray-700 mb-2">Travel Date</label>
                        <input type="date" name="travel_date" id="travel_date" required class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="travelers" class="block text-sm font-medium text-gray-700 mb-2">Number of Travelers</label>
                        <input type="number" name="travelers" id="travelers" min="1" value="1" required class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        Book Now
                    </button>
                </form>

                <div class="mt-6 border-t border-gray-200 pt-6">
                    <h3 class="text-lg font-semibold mb-4">Package Includes</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ $package->duration_days }} Days Tour
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Hotel Accommodation
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Transportation
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Tour Guide
                        </li>
                    </ul>
                </div>

                <div class="mt-6 border-t border-gray-200 pt-6">
                    <h3 class="text-lg font-semibold mb-4">Need Help?</h3>
                    <p class="text-gray-600 mb-4">Have questions about this package? Contact us for more information.</p>
                    <a href="{{ route('contact') }}" class="text-blue-600 hover:text-blue-700 font-medium">Contact Us →</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
