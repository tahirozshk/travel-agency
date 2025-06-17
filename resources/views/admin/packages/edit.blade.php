@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="p-6">
        <h2 class="text-3xl font-bold text-[#1F3A5F] font-display mb-8">Edit Package</h2>

        <form action="{{ route('admin.packages.update', $package) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="col-span-2">
                    <label for="name" class="block text-sm font-bold text-[#1F3A5F] mb-2">Package Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $package->name) }}" required 
                           class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFA733] focus:ring-[#FFA733]">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="description" class="block text-sm font-bold text-[#1F3A5F] mb-2">Description</label>
                    <textarea name="description" id="description" rows="4" required
                              class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFA733] focus:ring-[#FFA733]">{{ old('description', $package->description) }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="price" class="block text-sm font-bold text-[#1F3A5F] mb-2">Price ($)</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">$</span>
                        </div>
                        <input type="number" name="price" id="price" value="{{ old('price', $package->price) }}" required step="0.01" min="0"
                               class="pl-7 block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFA733] focus:ring-[#FFA733]">
                    </div>
                    @error('price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="duration" class="block text-sm font-bold text-[#1F3A5F] mb-2">Duration</label>
                    <input type="text" name="duration" id="duration" value="{{ old('duration', $package->duration) }}" required 
                           placeholder="e.g., 5 days, 4 nights"
                           class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFA733] focus:ring-[#FFA733]">
                    @error('duration')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="image" class="block text-sm font-bold text-[#1F3A5F] mb-2">Package Image</label>
                    <input type="file" name="image" id="image" accept="image/*"
                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                                  file:rounded-lg file:border-0 file:text-sm file:font-bold
                                  file:bg-[#1F3A5F] file:text-white hover:file:bg-[#2d5485]
                                  cursor-pointer">
                    <p class="mt-1 text-sm text-gray-500">Leave empty to keep current image</p>
                    @error('image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-end space-x-4 pt-6 border-t mt-8">
                <a href="{{ route('admin.packages.index') }}" 
                   class="bg-gray-100 text-gray-800 hover:bg-gray-200 font-bold py-3 px-6 rounded-lg transition-colors duration-200">
                    Cancel
                </a>
                <button type="submit" 
                        class="bg-[#FFA733] hover:bg-[#ff9100] text-white font-bold py-3 px-8 rounded-lg transform transition duration-200 hover:scale-105">
                    Update Package
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
