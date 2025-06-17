@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-[#020817] min-h-screen">
    <!-- Hero Section -->
    <div class="relative min-h-screen pb-96">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e" alt="Hero image" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-[#020817] via-[#020817]/80 to-[#020817]"></div>
        </div>
        <div class="relative h-full flex items-center pt-32">
            <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <br><br><br>
                    <div class="text-11xl font-bold text-white mb-8">TravelPro</div>
                    <h1 class="text-5xl md:text-6xl font-bold text-white mb-8">Your Journey Begins Here</h1>
                    <p class="text-xl text-gray-300 mb-12">We specialize in creating unforgettable travel experiences. Let us help you discover the world's most beautiful destinations.</p>
                    <div class="space-x-6">
                        <a href="/packages" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-medium hover:bg-blue-700 transition-colors">
                            Explore Packages
                        </a>
                        <a href="/contact" class="inline-block bg-transparent text-white border-2 border-white px-8 py-4 rounded-lg text-lg font-medium hover:bg-white/10 transition-colors">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-64 relative z-10">
        <br><br>
        <h2 class="text-3xl font-bold text-white mb-16 text-center">Our Impact in Numbers</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg text-center shadow-xl">
                <div class="text-5xl font-bold text-blue-600 mb-3" id="travelers-count">3,597+</div>
                <div class="text-lg text-blue-600 font-medium">Happy Travelers</div>
            </div>
            <div class="bg-white p-8 rounded-lg text-center shadow-xl">
                <div class="text-5xl font-bold text-blue-600 mb-3">50+</div>
                <div class="text-lg text-blue-600 font-medium">Destinations</div>
            </div>
            <div class="bg-white p-8 rounded-lg text-center shadow-xl">
                <div class="text-5xl font-bold text-blue-600 mb-3">98%</div>
                <div class="text-lg text-blue-600 font-medium">Satisfaction Rate</div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-48">
        <br><br>
        <h2 class="text-3xl font-bold text-white mb-24 text-center">The TravelPro Experience</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center">
                <div class="w-16 h-16 mx-auto mb-6">
                    <svg class="w-full h-full text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Curated Experiences</h3>
                <p class="text-gray-400">Each itinerary is crafted with care, blending must-see attractions with hidden local gems.</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 mx-auto mb-6">
                    <svg class="w-full h-full text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Expert Local Guides</h3>
                <p class="text-gray-400">Our knowledgeable guides bring destinations to life with their expertise and passion.</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 mx-auto mb-6">
                    <svg class="w-full h-full text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Hassle-Free Planning</h3>
                <p class="text-gray-400">From booking to return, we handle all the details so you can focus on enjoying your journey.</p>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
