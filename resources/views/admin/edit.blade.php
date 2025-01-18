<x-hero>
    <div class="container">
        <h1>Edit Vehicle</h1>

        <form action="{{ route('vehicle.update', $vehicle) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- This is necessary to simulate a PUT request in a POST form -->


            <div class="form-group">
                @if ($vehicle->image)
                    <img src="{{ asset('storage/' . $vehicle->image) }}" alt="img" class="h-[100px] w-[100px]">
                @endif
            </div>

            <div>
                <label for="image" class="block font-medium mb-1">Car Image</label>
                <input type="file" name="image" id="image" value="{{ old('image') }}" placeholder="Car Model"
                    class="w-full p-2 border rounded-lg @error('image') border-red-500 @enderror">
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" value="{{ old('model', $vehicle->model) }}"
                    class="form-control">
                @error('model')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="{{ old('price', $vehicle->price) }}"
                    class="form-control">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" value="{{ old('year', $vehicle->year) }}"
                    class="form-control">
                @error('year')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" value="{{ old('location', $vehicle->location) }}"
                    class="form-control">
                @error('location')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Vehicle</button>
        </form>
    </div>
</x-hero>
