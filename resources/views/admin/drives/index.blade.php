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
            @foreach ($testDrives as $testDrive)
                <tr>
                    <td>{{ $testDrive->name }}</td>
                    <td>{{ $testDrive->email }}</td>
                    <td>{{ $testDrive->phone }}</td>
                    <td>{{ $testDrive->vehicle }}</td>
                    <td>{{ $testDrive->date }}</td>
                    <td>{{ $testDrive->time }}</td>
                    <td>{{ ucfirst($testDrive->status) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-hero>
