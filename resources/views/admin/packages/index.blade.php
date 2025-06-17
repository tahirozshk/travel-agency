@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#0B1121] text-white pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">        <!-- Navigation and Title -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold text-white">Travel Packages</h2>
            </div>
            <a href="{{ route('admin.packages.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-[#3B82F6] text-white font-semibold rounded-md hover:bg-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Package
            </a>
        </div>

        <!-- Column Headers -->
        <div class="grid grid-cols-12 gap-4 mb-4 px-6">
            <div class="col-span-7 text-sm font-semibold text-white uppercase">Name & Description</div>
            <div class="col-span-2 text-right text-sm font-semibold text-white uppercase">Price</div>
            <div class="col-span-3 text-right text-sm font-semibold text-white uppercase">Actions</div>
        </div>

        <!-- Packages List -->
        <div class="space-y-6">
            @forelse($packages as $package)
                <div class="relative">
                    <!-- White border line -->
                    <div class="absolute -bottom-3 left-0 right-0 h-px bg-white/20"></div>
                    
                    <!-- Package content -->
                    <div class="grid grid-cols-12 gap-4 px-6">
                        <div class="col-span-7">
                            <h3 class="text-lg font-semibold text-white">{{ $package->name }}</h3>
                            <p class="text-white/90 mt-1">{{ Str::limit($package->description, 100) }}</p>
                        </div>
                        <div class="col-span-2 text-right">
                            <span class="text-lg font-semibold text-white">${{ number_format($package->price, 2) }}</span>
                        </div>
                        <div class="col-span-3 text-right">
                            <div class="flex items-center justify-end space-x-6">
                                <a href="{{ route('admin.packages.edit', $package) }}" 
                                   class="text-white hover:text-[#3B82F6] font-semibold transition-colors duration-200">
                                   Edit
                                </a>
                                <form action="{{ route('admin.packages.destroy', $package) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-white hover:text-red-400 font-semibold transition-colors duration-200"
                                            onclick="return confirm('Are you sure you want to delete this package?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-8">
                    <p class="text-white text-lg mb-2">No packages found</p>
                    <a href="{{ route('admin.packages.create') }}" 
                       class="text-[#3B82F6] hover:text-blue-400 font-semibold">
                        Add your first package
                    </a>
                </div>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $packages->links() }}
        </div>
    </div>
</div>
@endsection
