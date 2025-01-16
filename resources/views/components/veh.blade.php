<div class="container">
    <h1>Vehicle Inventory</h1>

    @if ($vehicles->isEmpty())
        <p>No vehicles available in the inventory.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>License Plate</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $vehicle)
                    <tr>
                        <td>{{ $vehicle->id }}</td>
                        <td>{{ $vehicle->make }}</td>
                        <td>{{ $vehicle->model }}</td>
                        <td>{{ $vehicle->year }}</td>
                        <td>{{ $vehicle->color }}</td>
                        <td>{{ $vehicle->price }}</td>
                        <td>{{ $vehicle->license_plate }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
