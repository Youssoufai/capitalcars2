<x-hero>
    <div class="container">
        <h1>Edit Vehicle</h1>

        <form action="{{ route('vehicle.update', $vehicle) }}" method="POST">
            @csrf
            @method('PUT') <!-- This is necessary to simulate a PUT request in a POST form -->

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
