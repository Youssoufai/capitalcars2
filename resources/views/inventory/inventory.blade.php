<x-hero>
    <section class="h-full p-6 md:p-11">
        <div class="bg-gray-100 text-black p-6 md:p-8 space-y-4 rounded-lg flex flex-col justify-center shadow-lg">
            <h1 class="text-lg md:text-xl font-semibold">What are you looking for?</h1>
            <input type="text" placeholder="Type to search..."
                class="w-full h-12 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-gray-300">
        </div>

        <section class="flex-col md:flex md:flex-row gap-6 p-4 mt-6">
            <!-- Filters Section -->
            <form method="GET" action="{{ route('vehiclee') }}">
                <div class="w-full md:w-1/4 bg-white rounded-lg shadow-lg">
                    <div class="bg-black text-white p-4 rounded-t-lg">
                        <i class="fas fa-filter"></i>
                        <span class="text-xl font-bold">Filters</span>
                    </div>
                    <div class="p-4 space-y-6">
                        <!-- Condition Filter -->
                        <div>
                            <h2 class="font-semibold mb-2">Condition</h2>
                            <div class="space-y-2">
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>All</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>New</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>Used</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>Locally Used</span>
                                </label>
                            </div>
                        </div>
                        <!-- Price Filter -->
                        <div>
                            <h2 class="font-semibold mb-2">Price</h2>
                            <div class="space-y-2">
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="price[]" value="0-10M"
                                        {{ in_array('0-10M', request('price', [])) ? 'checked' : '' }}
                                        class="form-checkbox">
                                    <span>₦0-10M</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="price[]" value="10M-30M"
                                        {{ in_array('10M-30M', request('price', [])) ? 'checked' : '' }}
                                        class="form-checkbox">
                                    <span>₦10M-30M</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="price[]" value="30M-40M"
                                        {{ in_array('30M-40M', request('price', [])) ? 'checked' : '' }}
                                        class="form-checkbox">
                                    <span>₦30M-40M</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="price[]" value="above40M"
                                        {{ in_array('above40M', request('price', [])) ? 'checked' : '' }}
                                        class="form-checkbox">
                                    <span>Above ₦40M</span>
                                </label>
                            </div>
                        </div>

                        <!-- Transmission Filter -->
                        <div>
                            <h2 class="font-semibold mb-2">Transmission</h2>
                            <div class="space-y-2">
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>Automatic</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>Manual</span>
                                </label>
                            </div>
                        </div>
                        <!-- Body Type Filter -->
                        <div>
                            <h2 class="font-semibold mb-2">Body Type</h2>
                            <div class="space-y-2">
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>Sedan</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>SUV</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>Truck</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>Coupe</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" class="form-checkbox">
                                    <span>Minivan</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit">Apply filters</button>
            </form>

            <!-- Listings Section -->
            <section class="flex flex-col gap-8">
                <div class="w-full md:w-full bg-white rounded-lg shadow-lg p-6">
                    <!-- Single Listing -->
                    @foreach ($vehicles as $vehicle)
                        <div class="flex flex-wrap md:flex-nowrap gap-6 border-b pb-4">
                            <div class="w-full md:w-1/3">
                                <img src="{{ asset('storage/' . $vehicle->image) }}" alt="{{ $vehicle->model }}"
                                    class="w-full h-48 object-cover rounded-lg">
                            </div>
                            <div class="w-full md:w-2/3 flex flex-col justify-between">
                                <h1 class="font-bold text-xl md:text-2xl">{{ $vehicle->model }}</h1>
                                <h2 class="text-red-600 text-xl md:text-2xl font-bold">
                                    <sup>₦</sup>{{ number_format($vehicle->price, 2) }}
                                </h2>
                                <div class="flex flex-wrap gap-4 mt-2">
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-tachometer-alt text-gray-500"></i>
                                        <span class="text-sm">Mileage: {{ $vehicle->mileage }}</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-calendar-alt text-gray-500"></i>
                                        <span class="text-sm">Year: {{ $vehicle->year }}</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-car text-gray-500"></i>
                                        <span class="text-sm">Drive Train: {{ $vehicle->drivetrain }}</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-cogs text-gray-500"></i>
                                        <span class="text-sm">Engine: {{ $vehicle->engine }}</span>
                                    </div>
                                </div>
                                <p class="text-gray-600 text-sm md:text-base mt-2">{{ $vehicle->description }}</p>
                                <div class="flex justify-between items-center mt-4">
                                    <span class="text-gray-500 text-sm">Dealer: {{ $vehicle->dealer }}</span>
                                    <span class="text-gray-500 text-sm">Location: {{ $vehicle->location }}</span>
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                                        <a href="{{ route('test-drive') }}">Test Drive/Inspection</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Add more listings as needed -->
                </div>
                <!-- Add more listings as needed -->
            </section>

        </section>
    </section>




    <div class="container">
        <h1>Vehicle Inventory</h1>

        <!-- Filter Form -->
        <form method="GET" action="{{ route('vehiclee') }}">
            <div class="row">
                <!-- Filter by Make -->
                {{-- <div class="col-md-3">
                    <label for="make">Make</label>
                    <select name="make" id="make" class="form-control">
                        <option value="">Select Make</option>
                        <!-- Add your make options here -->
                        <option value="Toyota" {{ request('make') == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                        <option value="Honda" {{ request('make') == 'Honda' ? 'selected' : '' }}>Honda</option>
                        <option value="Ford" {{ request('make') == 'Ford' ? 'selected' : '' }}>Ford</option>
                        <!-- Add more makes as needed -->
                    </select>
                </div> --}}

                <!-- Filter by Model -->
                <div class="col-md-3">
                    <label for="model">Model</label>
                    <input type="text" name="model" id="model" class="form-control"
                        value="{{ request('model') }}">
                </div>

                <!-- Filter by Year -->
                <div class="col-md-3">
                    <label for="year">Year</label>
                    <input type="text" name="year" id="year" class="form-control"
                        value="{{ request('year') }}">
                </div>

                <!-- Filter by Price Range -->
                {{--    <div class="col-md-3">
                    <label for="min_price">Price Range</label>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="number" name="min_price" id="min_price" class="form-control"
                                value="{{ request('min_price') }}" placeholder="Min Price">
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="max_price" id="max_price" class="form-control"
                                value="{{ request('max_price') }}" placeholder="Max Price">
                        </div>
                    </div>
                </div> --}}

                <!-- Submit Button -->
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary mt-3">Apply Filters</button>
                </div>
            </div>
        </form>

        <hr>

        <!-- Display filtered vehicles -->
        <div class="row h-full">
            @foreach ($vehicles as $vehicle)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $vehicle->image) }}" class="h-[300px] w-[300px]"
                            alt="{{ $vehicle->make }} {{ $vehicle->model }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $vehicle->model }} ({{ $vehicle->year }})
                            </h5>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>





</x-hero>
