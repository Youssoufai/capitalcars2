<x-hero>
    <h1>Test Drive Requests</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Preferred Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testDrive as $testDrivee)
                <tr>
                    <td>{{ $testDrivee->email }}</td>
                    <td>{{ $testDrivee->phone }}</td>
                    <td>{{ $testDrivee->vehicle }}</td>
                    <td>{{ $testDrivee->date }}</td>
                    <td>{{ $testDrivee->time }}</td>
                    <td>{{ ucfirst($testDrivee->status) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-hero>
