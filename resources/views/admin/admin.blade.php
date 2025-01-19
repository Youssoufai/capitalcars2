<x-hero>

    <body class="bg-gray-100">
        <!-- Admin Header -->
        <header class="bg-black text-white p-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin Dashboard</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="bg-red-600 px-4 py-2 rounded text-sm hover:bg-red-700">
                    Logout
                </button>
            </form>
        </header>

        <!-- Main Content -->
        <div class="p-6">
            <div class="flex flex-wrap gap-6">
                <!-- Sidebar -->
                <aside class="w-full md:w-1/4 bg-white p-4 rounded-lg shadow-lg">
                    <h2 class="text-lg font-bold mb-4">Admin Menu</h2>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-black">
                                <i class="fas fa-list"></i>
                                <span>Manage Listings</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('test-drive.show') }}"
                                class="flex items-center space-x-2 text-gray-700 hover:text-black">
                                <i class="fas fa-user"></i>
                                <span>See Test Drives</span>
                            </a>
                        </li>
                    </ul>
                </aside>

                <!-- Admin Actions -->
                <main class="w-full md:w-3/4 bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-6">Manage Listings</h2>

                    <!-- Add New Listing -->
                    <div class="p-4 bg-gray-200 rounded-lg mb-6">
                        <h3 class="font-bold mb-4">Add New Car Listing</h3>
                        <form action="{{ route('vehicle-store') }}" method="POST"
                            class="grid grid-cols-1 md:grid-cols-2 gap-4" enctype="multipart/form-data">
                            @csrf

                            <!-- Car Model -->
                            <div>
                                <label for="model" class="block font-medium mb-1">Car Model</label>
                                <input type="text" name="model" id="model" value="{{ old('model') }}"
                                    placeholder="Car Model"
                                    class="w-full p-2 border rounded-lg @error('model') border-red-500 @enderror">
                                @error('model')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Image --}}

                            <div>
                                <label for="image" class="block font-medium mb-1">Car Image</label>
                                <input type="file" name="image" id="image" value="{{ old('image') }}"
                                    placeholder="Car Model"
                                    class="w-full p-2 border rounded-lg @error('image') border-red-500 @enderror">
                                @error('image')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Price -->
                            <div>
                                <label for="price" class="block font-medium mb-1">Price (₦)</label>
                                <input type="text" name="price" id="price" value="{{ old('price') }}"
                                    placeholder="Price (₦)"
                                    class="w-full p-2 border rounded-lg @error('price') border-red-500 @enderror">
                                @error('price')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Mileage -->
                            <div>
                                <label for="mileage" class="block font-medium mb-1">Mileage</label>
                                <input type="text" name="mileage" id="mileage" value="{{ old('mileage') }}"
                                    placeholder="Mileage"
                                    class="w-full p-2 border rounded-lg @error('mileage') border-red-500 @enderror">
                                @error('mileage')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Condition --}}
                            <div>
                                <label for="condition" class="block font-medium mb-1">Condition</label>
                                <input type="text" name="condition" id="condition" value="{{ old('condition') }}"
                                    placeholder="Condition"
                                    class="w-full p-2 border rounded-lg @error('condition') border-red-500 @enderror">
                                @error('condition')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Drivetrain -->
                            <div>
                                <label for="drivetrain" class="block font-medium mb-1">Drivetrain</label>
                                <input type="text" name="drivetrain" id="drivetrain" value="{{ old('drivetrain') }}"
                                    placeholder="Drivetrain"
                                    class="w-full p-2 border rounded-lg @error('drivetrain') border-red-500 @enderror">
                                @error('drivetrain')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Engine -->
                            <div>
                                <label for="engine" class="block font-medium mb-1">Engine</label>
                                <input type="text" name="engine" id="engine" value="{{ old('engine') }}"
                                    placeholder="Engine"
                                    class="w-full p-2 border rounded-lg @error('engine') border-red-500 @enderror">
                                @error('engine')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            {{--    <div>
                                <label for="conditon" class="block font-medium mb-1">Conditon</label>
                                <input type="text" name="condition" id="condition" value="{{ old('condition') }}"
                                    placeholder="condition"
                                    class="w-full p-2 border rounded-lg @error('condition') border-red-500 @enderror">
                                @error('condition')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div> --}}
                            <div>
                                <label for="transmission" class="block font-medium mb-1">Transmission</label>
                                <input type="text" name="transmission" id="transmission"
                                    value="{{ old('transmission') }}" placeholder="Transmisson e.g Automatic"
                                    class="w-full p-2 border rounded-lg @error('transmission') border-red-500 @enderror">
                                @error('transmission')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="bodytype" class="block font-medium mb-1">Body Type</label>
                                <input type="text" name="bodytype" id="bodytype" value="{{ old('bodytype') }}"
                                    placeholder="bodytype"
                                    class="w-full p-2 border rounded-lg @error('bodytype') border-red-500 @enderror">
                                @error('bodytype')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Year -->
                            <div>
                                <label for="year" class="block font-medium mb-1">Year</label>
                                <input type="text" name="year" id="year" value="{{ old('year') }}"
                                    placeholder="Year"
                                    class="w-full p-2 border rounded-lg @error('year') border-red-500 @enderror">
                                @error('year')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Dealer Name -->
                            <div>
                                <label for="dealer_name" class="block font-medium mb-1">Dealer Name</label>
                                <input type="text" name="dealer_name" id="dealer_name"
                                    value="{{ old('dealer_name') }}" placeholder="Dealer Name"
                                    class="w-full p-2 border rounded-lg @error('dealer_name') border-red-500 @enderror">
                                @error('dealer_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Location -->
                            <div>
                                <label for="location" class="block font-medium mb-1">Location</label>
                                <input type="text" name="location" id="location" value="{{ old('location') }}"
                                    placeholder="Location"
                                    class="w-full p-2 border rounded-lg @error('location') border-red-500 @enderror">
                                @error('location')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-span-full">
                                <label for="description" class="block font-medium mb-1">Description</label>
                                <textarea name="description" id="description" placeholder="Description"
                                    class="w-full p-2 border rounded-lg @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="col-span-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
                                Add Listing
                            </button>
                        </form>

                    </div>

                    <!-- Listings Table -->
                    <table class="w-full border-collapse bg-white">
                        @forelse ($vehicles as $vehicle)
                            <thead>
                                <tr class="bg-gray-300 text-gray-700">
                                    <th class="border p-2">Car Model</th>
                                    <th class="border p-2">Price</th>
                                    <th class="border p-2">Year</th>
                                    <th class="border p-2">Transmission</th>
                                    <th class="border p-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example Row -->
                                <tr class="text-center">
                                    <td class="border p-2"> <img src="{{ asset('storage/' . $vehicle->image) }}"
                                            alt="" class="h-[200px] w-[200px]"> </td>
                                    <td class="border p-2"> {{ $vehicle->model }} </td>
                                    <td class="border p-2">{{ $vehicle->price }}</td>
                                    <td class="border p-2">{{ $vehicle->transmission }}</td>
                                    <td class="border p-2">{{ $vehicle->bodytype }}</td>
                                    <td class="border p-2">{{ $vehicle->year }}</td>
                                    <td class="border p-2">{{ $vehicle->location }}</td>
                                    <td class="border p-2 space-x-2">
                                        <button
                                            class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600"><a
                                                href="{{ route('vehicle.edit', $vehicle) }}">
                                                Edit</a></button>
                                        <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- Add more rows dynamically -->
                            </tbody>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center p-4">No Vehicles found.</td>
                            </tr>
                        @endforelse
                    </table>
                    {{--  <tbody>
                        @forelse($vehicles as $vehicle)
                            <tr class="text-center">
                                <td class="border p-2">{{ $vehicle->model }}</td>
                                <td class="border p-2">₦{{ number_format($vehicle->price) }}</td>
                                <td class="border p-2">{{ $vehicle->year }}</td>
                                <td class="border p-2">{{ $vehicle->location }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $vehicle->image) }}" alt="">
                                </td>
                                <td class="border p-2 space-x-2">
                                    <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600"><a
                                            href="{{ route('vehicle.edit', $vehicle) }}">
                                            Edit</a></button>
                                    <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center p-4">No vehicles found.</td>
                            </tr>
                        @endforelse
                    </tbody>
 --}}
                </main>
            </div>
        </div>
    </body>
</x-hero>
