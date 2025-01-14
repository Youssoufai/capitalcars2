<x-hero>
    <section class="h-full p-6 md:p-11">
        <div class="bg-gray-100 text-black p-6 md:p-8 space-y-4 rounded-lg flex flex-col justify-center shadow-lg">
            <h1 class="text-lg md:text-xl font-semibold">What are you looking for?</h1>
            <input type="text" placeholder="Type to search..."
                class="w-full h-12 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-gray-300">
        </div>
        <section class="flex-col md:flex md:flex-row gap-6 p-4 mt-6">
            <!-- Filters Section -->
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
                                <input type="checkbox" class="form-checkbox">
                                <span>₦0-10M</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="form-checkbox">
                                <span>₦10M-30M</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="form-checkbox">
                                <span>₦30M-40M</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="form-checkbox">
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
            <!-- Listings Section -->
            <section class="flex flex-col gap-8">
                <div class="w-full md:w-full bg-white rounded-lg shadow-lg p-6">
                    <!-- Single Listing -->
                    <div class="flex flex-wrap md:flex-nowrap gap-6 border-b pb-4">
                        <div class="w-full md:w-1/3">
                            <img src="450e.jpg" alt="Mercedes-Benz E450" class="w-full h-48 object-cover rounded-lg">
                        </div>
                        <div class="w-full md:w-2/3 flex flex-col justify-between">
                            <h1 class="font-bold text-xl md:text-2xl">MERCEDES BENZ GLA250</h1>
                            <h2 class="text-red-600 text-xl md:text-2xl font-bold"><sup>₦</sup>14,800,000</h2>
                            <div class="flex flex-wrap gap-4 mt-2">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-tachometer-alt text-gray-500"></i>
                                    <span class="text-sm">Mileage: 25,000 km</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-calendar-alt text-gray-500"></i>
                                    <span class="text-sm">Year: 2015</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-car text-gray-500"></i>
                                    <span class="text-sm">Drive Train: RWD</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-cogs text-gray-500"></i>
                                    <span class="text-sm">Engine: 2.4L H4</span>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm md:text-base mt-2">This luxury car offers excellent
                                performance
                                with a stylish design. Perfect for daily use or special occasions.</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-gray-500 text-sm">Dealer: Capital Cars</span>
                                <span class="text-gray-500 text-sm">Location: Abuja, Nigeria</span>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                                    <a href="{{ route('test-drive') }}">Test
                                        Drive/Inspection</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more listings as needed -->
                </div>
                <!-- Add more listings as needed -->

            </section>
        </section>
    </section>


</x-hero>
