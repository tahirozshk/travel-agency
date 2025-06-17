@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="p-6">
        <h2 class="text-3xl font-bold text-[#1F3A5F] font-display mb-2">Create New Package</h2>
        <p class="text-gray-600 mb-8">Add a new travel package to your collection</p>

        <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="col-span-2">
                    <label for="name" class="block text-sm font-bold text-[#1F3A5F] mb-2">
                        📦 Package Name
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required 
                           class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFA733] focus:ring-[#FFA733] px-4 py-3"
                           placeholder="Enter package name">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="description" class="block text-sm font-bold text-[#1F3A5F] mb-2">
                        📝 Description
                    </label>
                    <textarea name="description" id="description" rows="4" required
                              class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFA733] focus:ring-[#FFA733] px-4 py-3"
                              placeholder="Describe your travel package...">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="price" class="block text-sm font-bold text-[#1F3A5F] mb-2">
                        💰 Price
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-[#FFA733] font-bold text-lg">$</span>
                        </div>
                        <input type="number" name="price" id="price" value="{{ old('price') }}" required step="0.01" min="0"
                               class="pl-10 block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFA733] focus:ring-[#FFA733] px-4 py-3"
                               placeholder="0.00">
                    </div>
                    @error('price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="duration" class="block text-sm font-bold text-[#1F3A5F] mb-2">
                        ⏰ Duration
                    </label>
                    <input type="text" name="duration" id="duration" value="{{ old('duration') }}" required 
                           placeholder="e.g., 5 days, 4 nights"
                           class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFA733] focus:ring-[#FFA733] px-4 py-3">
                    @error('duration')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="image" class="block text-sm font-bold text-[#1F3A5F] mb-2">
                        🖼️ Package Image
                    </label>
                    <input type="file" name="image" id="image" required accept="image/*"
                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                                  file:rounded-lg file:border-0 file:text-sm file:font-bold
                                  file:bg-[#1F3A5F] file:text-white hover:file:bg-[#2d5485]
                                  cursor-pointer border-2 border-dashed border-gray-300 rounded-lg p-4">
                    <p class="mt-1 text-sm text-gray-500">Upload a high-quality image of the destination (JPG, PNG, max 2MB)</p>
                    @error('image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- FIXED BUTTONS SECTION -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t mt-8 bg-gray-50 -mx-6 px-6 py-6">
                <a href="{{ route('admin.packages.index') }}" 
                   class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-3 px-6 rounded-lg transition-colors duration-200 border-2 border-gray-300">
                    ❌ Cancel
                </a>
                
                <!-- THIS IS THE MAIN CREATE BUTTON - NOW VERY VISIBLE -->
                <button type="submit" 
                        style="background-color:rgb(91, 95, 102) !important; color: white !important; border: 2px solidrgb(91, 95, 102) !important;"
                        class="font-bold py-3 px-8 rounded-lg transition-all duration-200 hover:bg-orange-600 transform hover:scale-105 shadow-lg">
                    ✅ CREATE PACKAGE
                </button>
            </div>
        </form>
    </div>
</div>
@endsection