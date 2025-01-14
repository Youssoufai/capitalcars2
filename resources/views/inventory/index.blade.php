<h1>Vehicle Inventory</h1>
<table>
    <thead>
        <tr>
            <th>Model</th>
            <th>Price</th>
            <th>Mileage</th>
            <th>Engine</th>
            <th>Drivetrain</th>
            <th>Year</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->model }}</td>
                <td>${{ number_format($vehicle->price, 2) }}</td>
                <td>{{ $vehicle->mileage }} miles</td>
                <td>{{ $vehicle->engine }}</td>
                <td>{{ $vehicle->drivetrain }}</td>
                <td>{{ $vehicle->year }}</td>
                <td>{{ $vehicle->location }}</td>
                <td>
                    <a href="{{ route('test-drive.create', ['vehicle_id' => $vehicle->id]) }}">Book Test Drive</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
