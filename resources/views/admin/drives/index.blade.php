<x-hero>
    <h1 class="text-2xl font-semibold mb-4">Test Drive Requests</h1>

    <!-- Check if there are no test drives -->
    @if ($testDrive->isEmpty())
        <div class="text-center py-6 text-lg font-semibold text-gray-600">
            No test drives available.
        </div>
    @else
        <div class="overflow-x-auto shadow-lg rounded-lg bg-white">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-6 text-left font-medium">Name</th>
                        <th class="py-3 px-6 text-left font-medium">Email</th>
                        <th class="py-3 px-6 text-left font-medium">Phone</th>
                        <th class="py-3 px-6 text-left font-medium">Preferred Date</th>
                        <th class="py-3 px-6 text-left font-medium">Preferred Time</th>
                        <th class="py-3 px-6 text-left font-medium">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach ($testDrive as $testDrivee)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-6">{{ $testDrivee->email }}</td>
                            <td class="py-3 px-6">{{ $testDrivee->phone }}</td>
                            <td class="py-3 px-6">{{ $testDrivee->vehicle }}</td>
                            <td class="py-3 px-6">{{ $testDrivee->date }}</td>
                            <td class="py-3 px-6">{{ $testDrivee->time }}</td>
                            <td class="py-3 px-6">
                                <span
                                    class="inline-block px-3 py-1 text-xs font-semibold text-white 
                                    {{ $testDrivee->status == 'approved'
                                        ? 'bg-green-500'
                                        : ($testDrivee->status == 'pending'
                                            ? 'bg-yellow-500'
                                            : 'bg-red-500') }} 
                                    rounded-full">
                                    {{ ucfirst($testDrivee->status) }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</x-hero>
