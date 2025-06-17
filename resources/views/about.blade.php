@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="bg-[#0B1121] min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- About Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-white mb-4">About Us</h1>
            <p class="text-xl text-white max-w-3xl mx-auto">We are passionate about creating unforgettable travel experiences for our clients.</p>
        </div>

        <!-- Our Story Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-24">
            <div>
                <img src="https://images.unsplash.com/photo-1464746133101-a2c3f88e0dd9" alt="Our Story" class="rounded-lg shadow-lg">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-white mb-6">Our Story</h2>
                <p class="text-white mb-6">Founded in 2010, Travel Agency has been at the forefront of creating exceptional travel experiences. We started with a simple mission: to make travel accessible, enjoyable, and memorable for everyone.</p>
                <p class="text-white">Over the years, we've grown from a small local agency to a trusted name in the travel industry, serving thousands of satisfied customers and organizing trips to destinations worldwide.</p>
            </div>
        </div>

        <!-- Our Values Section -->
        <div class="mb-24">
            <h2 class="text-3xl font-bold text-white mb-12 text-center">Our Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-[#1a2437] p-8 rounded-lg shadow-lg">
                    <div class="bg-blue-500/10 rounded-full p-4 w-16 h-16 mb-6">
                        <svg class="w-8 h-8 text-blue-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Customer First</h3>
                    <p class="text-white">We prioritize our customers' needs and satisfaction above everything else.</p>
                </div>
                <div class="bg-[#1a2437] p-8 rounded-lg shadow-lg">
                    <div class="bg-blue-500/10 rounded-full p-4 w-16 h-16 mb-6">
                        <svg class="w-8 h-8 text-blue-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Safety & Security</h3>
                    <p class="text-white">Your safety and security are our top priorities throughout your journey.</p>
                </div>
                <div class="bg-[#1a2437] p-8 rounded-lg shadow-lg">
                    <div class="bg-blue-500/10 rounded-full p-4 w-16 h-16 mb-6">
                        <svg class="w-8 h-8 text-blue-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Professional Service</h3>
                    <p class="text-white">We deliver exceptional service with attention to every detail.</p>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div>
            <h2 class="text-3xl font-bold text-white mb-12 text-center">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-[#1a2437] p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-white">Experienced Team</h3>
                    <p class="text-white">Our team of travel experts has years of experience in creating perfect travel itineraries.</p>
                </div>
                <div class="bg-[#1a2437] p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-white">Personalized Service</h3>
                    <p class="text-white">We tailor each trip to your specific needs and preferences.</p>
                </div>
                <div class="bg-[#1a2437] p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-white">Best Value</h3>
                    <p class="text-white">We offer competitive prices without compromising on quality.</p>
                </div>
                <div class="bg-[#1a2437] p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-white">24/7 Support</h3>
                    <p class="text-white">Our support team is always available to assist you during your journey.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
