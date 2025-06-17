@extends('layouts.app')

@section('title', 'Travel Packages')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Packages Header -->
    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Travel Packages</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Explore our curated selection of travel packages and find your perfect destination.</p>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <form action="{{ route('packages.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div>
                <label for="destination" class="block text-sm font-medium text-gray-700 mb-2">Destination</label>
                <select name="destination" id="destination" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Destinations</option>
                    @foreach($destinations as $destination)
                        <option value="{{ $destination }}" {{ request('destination') == $destination ? 'selected' : '' }}>
                            {{ $destination }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="duration" class="block text-sm font-medium text-gray-700 mb-2">Duration</label>
                <select name="duration" id="duration" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Any Duration</option>
                    <option value="1-3" {{ request('duration') == '1-3' ? 'selected' : '' }}>1-3 Days</option>
                    <option value="4-7" {{ request('duration') == '4-7' ? 'selected' : '' }}>4-7 Days</option>
                    <option value="8-14" {{ request('duration') == '8-14' ? 'selected' : '' }}>8-14 Days</option>
                    <option value="15+" {{ request('duration') == '15+' ? 'selected' : '' }}>15+ Days</option>
                </select>
            </div>
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price Range</label>
                <select name="price" id="price" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Any Price</option>
                    <option value="0-1000" {{ request('price') == '0-1000' ? 'selected' : '' }}>$0 - $1,000</option>
                    <option value="1000-2000" {{ request('price') == '1000-2000' ? 'selected' : '' }}>$1,000 - $2,000</option>
                    <option value="2000-5000" {{ request('price') == '2000-5000' ? 'selected' : '' }}>$2,000 - $5,000</option>
                    <option value="5000+" {{ request('price') == '5000+' ? 'selected' : '' }}>$5,000+</option>
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Apply Filters
                </button>
            </div>
        </form>
    </div>

    <!-- Packages Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        @foreach($packages as $package)
        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="{{ $package->image_path }}" alt="{{ $package->name }}" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $package->name }}</h3>
                <p class="text-gray-600 mb-4">{{ Str::limit($package->description, 100) }}</p>
                <div class="mb-4">
                    <div class="flex items-center text-gray-600 mb-2">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        {{ $package->destination }}
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $package->duration_days }} Days
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-2xl font-bold text-blue-600">${{ number_format($package->price, 2) }}</span>
                    <a href="{{ route('packages.show', $package->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        View Details
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $packages->links() }}
    </div>
</div>
@endsection
