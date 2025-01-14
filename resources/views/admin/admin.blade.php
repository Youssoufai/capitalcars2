<x-hero>

    <body class="bg-gray-100">
        <!-- Admin Header -->
        <header class="bg-black text-white p-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin Dashboard</h1>
            <button class="bg-red-600 px-4 py-2 rounded text-sm hover:bg-red-700">
                Logout
            </button>
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
                            <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-black">
                                <i class="fas fa-user"></i>
                                <span>Manage Users</span>
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
                        <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Car Model" class="w-full p-2 border rounded-lg">
                            <input type="text" placeholder="Price (₦)" class="w-full p-2 border rounded-lg">
                            <input type="text" placeholder="Mileage" class="w-full p-2 border rounded-lg">
                            <input type="text" placeholder="Drivetrain" class="w-full p-2 border rounded-lg">
                            <input type="text" placeholder="Engine" class="w-full p-2 border rounded-lg">
                            <input type="text" placeholder="Year" class="w-full p-2 border rounded-lg">
                            <input type="text" placeholder="Dealer Name" class="w-full p-2 border rounded-lg">
                            <input type="text" placeholder="Location" class="w-full p-2 border rounded-lg">
                            <div class="col-span-full">
                                <textarea placeholder="Description" class="w-full p-2 border rounded-lg"></textarea>
                            </div>
                            <button type="submit"
                                class="col-span-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
                                Add Listing
                            </button>
                        </form>
                    </div>

                    <!-- Listings Table -->
                    <table class="w-full border-collapse bg-white">
                        <thead>
                            <tr class="bg-gray-300 text-gray-700">
                                <th class="border p-2">Car Model</th>
                                <th class="border p-2">Price</th>
                                <th class="border p-2">Year</th>
                                <th class="border p-2">Location</th>
                                <th class="border p-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row -->
                            <tr class="text-center">
                                <td class="border p-2">MERCEDES BENZ GLA250</td>
                                <td class="border p-2">₦14,800,000</td>
                                <td class="border p-2">2015</td>
                                <td class="border p-2">Abuja, Nigeria</td>
                                <td class="border p-2 space-x-2">
                                    <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                        Edit
                                    </button>
                                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <!-- Add more rows dynamically -->
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
    </body>
</x-hero>
