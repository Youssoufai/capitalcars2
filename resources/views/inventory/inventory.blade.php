<x-hero>
    <section class="h-full p-6 md:p-11">
        {{-- Search Bar --}}
        <div class="bg-gray-100 text-black p-6 md:p-8 space-y-4 rounded-lg flex flex-col justify-center shadow-lg">
            <h1 class="text-lg md:text-xl font-semibold">What are you looking for?</h1>
            <form method="GET" action="{{ route('vehiclee') }}" class="w-full flex items-center space-x-2">
                <input type="text" name="search" placeholder="Type to search..."
                    class="w-full h-12 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-gray-300"
                    value="{{ request('search') }}">
                <button type="submit"
                    class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                    Search
                </button>
            </form>
        </div>


        <div class="flex flex-col md:flex-row gap-6 mt-6 w-full">
            <!-- Filters Section -->
            <form method="GET" action="{{ route('vehiclee') }}" class="w-full md:w-[30%]">
                <div class="bg-black text-white p-6 rounded-t-lg">
                    <i class="fas fa-filter"></i>
                    <span class="text-xl font-bold">Filters</span>
                </div>
                <div class="bg-white rounded-b-lg shadow-lg p-6 space-y-6">
                    <!-- Condition Filter -->
                    <!-- Condition Filter -->
                    <div>
                        <h2 class="font-semibold mb-2">Condition</h2>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="condition[]" value="New" class="form-checkbox">
                                <span>New</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="condition[]" value="Used" class="form-checkbox">
                                <span>Used</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="condition[]" value="Locally Used" class="form-checkbox">
                                <span>Locally Used</span>
                            </label>
                        </div>
                    </div>
                    <!-- Price Filter -->
                    <div>
                        <h2 class="font-semibold mb-2">Price</h2>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="price[]" value="0-10M" class="form-checkbox">
                                <span>₦0-10M</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="price[]" value="10M-30M" class="form-checkbox">
                                <span>₦10M-30M</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="price[]" value="30M-40M" class="form-checkbox">
                                <span>₦30M-40M</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="price[]" value="above40M" class="form-checkbox">
                                <span>Above ₦40M</span>
                            </label>
                        </div>
                    </div>
                    <!-- Transmission Filter -->
                    <div>
                        <h2 class="font-semibold mb-2">Transmission</h2>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="transmission[]" value="Automatic" class="form-checkbox">
                                <span>Automatic</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="transmission[]" value="Manual" class="form-checkbox">
                                <span>Manual</span>
                            </label>
                        </div>
                    </div>

                    <!-- Body Type Filter -->
                    <div>
                        <h2 class="font-semibold mb-2">Body Type</h2>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="bodytype[]" value="Sedan" class="form-checkbox">
                                <span>Sedan</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="bodytype[]" value="SUV" class="form-checkbox">
                                <span>SUV</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="bodytype[]" value="Truck" class="form-checkbox">
                                <span>Truck</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="bodytype[]" value="Coupe" class="form-checkbox">
                                <span>Coupe</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="bodytype[]" value="Minivan" class="form-checkbox">
                                <span>Minivan</span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                        Apply Filters
                    </button>
                </div>
            </form>

            <!-- Listings Section -->
            <div class="flex flex-col gap-8 w-full md:w-[70%]">
                <div class="bg-white rounded-lg shadow-lg p-6">
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
                                        <span class="text-sm">Drive Train: {{ $vehicle->condition }}</span>
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
                </div>
            </div>
        </div>
    </section>

</x-hero>
