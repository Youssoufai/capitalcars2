<x-hero>
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg max-w-3xl">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit Vehicle</h1>

        <form action="{{ route('vehicle.update', $vehicle) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- This is necessary to simulate a PUT request in a POST form -->

            <div class="mb-6">
                @if ($vehicle->image)
                    <img src="{{ asset('storage/' . $vehicle->image) }}" alt="Vehicle Image" class="h-24 w-24 rounded-md object-cover mb-4 mx-auto">
                @endif
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-1">Car Image</label>
                <input 
                    type="file" 
                    name="image" 
                    id="image" 
                    value="{{ old('image') }}" 
                    class="w-full p-2 border rounded-lg @error('image') border-red-500 @enderror focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="model" class="block text-gray-700 font-medium mb-1">Model</label>
                <input 
                    type="text" 
                    name="model" 
                    id="model" 
                    value="{{ old('model', $vehicle->model) }}" 
                    class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                @error('model')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-medium mb-1">Price</label>
                <input 
                    type="text" 
                    name="price" 
                    id="price" 
                    value="{{ old('price', $vehicle->price) }}" 
                    class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                @error('price')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="block text-gray-700 font-medium mb-1">Year</label>
                <input 
                    type="number" 
                    name="year" 
                    id="year" 
                    value="{{ old('year', $vehicle->year) }}" 
                    class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                @error('year')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="location" class="block text-gray-700 font-medium mb-1">Location</label>
                <input 
                    type="text" 
                    name="location" 
                    id="location" 
                    value="{{ old('location', $vehicle->location) }}" 
                    class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                @error('location')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center">
                <button 
                    type="submit" 
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-4 focus:ring-indigo-300">
                    Update Vehicle
                </button>
            </div>
        </form>
    </div>
</x-hero>
