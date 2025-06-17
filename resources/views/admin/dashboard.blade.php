@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#0B1121] text-white pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <br><br>
            <h2 class="text-3xl font-bold text-white mb-2">Admin Dashboard</h2>
            <p class="text-gray-300 text-lg">Manage your travel packages and website content</p>
        </div>

        <div class="bg-[#1a2437] rounded-lg shadow-xl p-8">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-2">Travel Packages</h3>
                    <p class="text-gray-300 text-lg">Manage your travel packages and destinations</p>
                </div>

                <a href="{{ route('admin.packages.create') }}" 
                   class="inline-flex items-center px-6 py-3 bg-[#3B82F6] text-white font-semibold rounded-md hover:bg-blue-600 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Package
                </a>
            </div>
            
            <div class="mt-8">
                <a href="{{ route('admin.packages.index') }}" 
                   class="inline-flex items-center text-white hover:text-[#3B82F6] font-semibold text-lg transition-colors duration-200">
                    View All Packages
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Quick Stats or Additional Cards can be added here -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <div class="bg-[#1a2437] rounded-lg shadow-xl p-6">
                <h4 class="text-xl font-bold text-white mb-2">Recent Activity</h4>
                <p class="text-gray-300">Monitor your latest package updates and bookings</p>
            </div>
            <div class="bg-[#1a2437] rounded-lg shadow-xl p-6">
                <h4 class="text-xl font-bold text-white mb-2">Quick Actions</h4>
                <div class="space-y-2">
                    <a href="{{ route('admin.packages.create') }}" class="block text-gray-300 hover:text-[#3B82F6] transition-colors duration-200">
                        → Create new package
                    </a>
                    <a href="{{ route('admin.packages.index') }}" class="block text-gray-300 hover:text-[#3B82F6] transition-colors duration-200">
                        → View all packages
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
