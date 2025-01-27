<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Drive Booking Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-md rounded-lg w-full max-w-lg p-6">
        <h2 class="text-2xl font-semibold text-center mb-4">Book a Test Drive</h2>
        <p class="text-gray-600 text-center mb-6">Fill in your details and schedule a test drive.</p>

        <form action="{{ route('test-drive.store') }}" method="POST">
            @csrf
            <!-- Full Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input type="text" id="name" name="name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your full name">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your email">
            </div>

            <!-- Phone Number -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                <input type="tel" id="phone" name="phone"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your phone number">
            </div>

            <!-- Vehicle Selection -->
            <div class="mb-4">
                <label for="vehicle" class="block text-gray-700 font-medium mb-2">Select Vehicle</label>
                <input id="vehicle" name="vehicle"
                placeholder="What Car?"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                   
                </input>
            </div>

            <!-- Preferred Date -->
            <div class="mb-4">
                <label for="date" class="block text-gray-700 font-medium mb-2">Preferred Date</label>
                <input type="date" id="date" name="date"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Preferred Time -->
            <div class="mb-4">
                <label for="time" class="block text-gray-700 font-medium mb-2">Preferred Time</label>
                <input type="time" id="time" name="time"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg px-4 py-2 focus:outline-none focus:ring-4 focus:ring-blue-300">
                Submit Booking
            </button>
        </form>
    </div>

</body>

</html>
