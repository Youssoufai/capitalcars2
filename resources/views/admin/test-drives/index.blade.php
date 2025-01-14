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
                <td>{{ $testDrive->preferred_date }}</td>
                <td>{{ ucfirst($testDrive->status) }}</td>
                <td>
                    <form action="{{ route('admin.test-drives.update', $testDrive->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="status" onchange="this.form.submit()">
                            <option value="pending" {{ $testDrive->status == 'pending' ? 'selected' : '' }}>Pending
                            </option>
                            <option value="confirmed" {{ $testDrive->status == 'confirmed' ? 'selected' : '' }}>Confirmed
                            </option>
                            <option value="completed" {{ $testDrive->status == 'completed' ? 'selected' : '' }}>Completed
                            </option>
                        </select>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
