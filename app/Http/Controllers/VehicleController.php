<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function store(Request $request)
    {

        // Validate Vehicle Data
        $validated = $request->validate([
            'model' => 'required|string|max:255',
            'price' => 'required|numeric|min:1',
            'mileage' => 'required|string|max:255',
            'drivetrain' => 'required|string|max:255',
            'engine' => 'required|string|max:255',
            'year' => 'required|numeric|digits:4|before_or_equal:' . date('Y'),
            'dealer_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create Vehicle

        Vehicle::create($validated);

        // Retrieve all vehicles
        $vehicles = Vehicle::all();

        // Redirect back with vehicles
        return redirect()->route('admin.dashboard')->with('vehicles', $vehicles);
    }
    public function index()
    {
        $vehicles = Vehicle::all(); // Fetch all vehicles
        return view('admin.admin', ['vehicles' => $vehicles]);
    }
    public function destroy(Vehicle $vehicle)
    {
        // The vehicle is already passed to the method via route-model binding

        // Delete the vehicle
        $vehicle->delete();

        // Redirect back with a success message
        return redirect()->route('inventory.inventory')->with('success', 'Vehicle deleted successfully.');
    }
}
