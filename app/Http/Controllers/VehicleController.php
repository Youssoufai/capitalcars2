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
    public function edit(Vehicle $vehicle)
    {
        return view('admin.edit', compact('vehicle'));
    }
    public function update(Request $request, Vehicle $vehicle)
    {
        // Validate the incoming data
        $request->validate([
            'model' => 'required|string|max:255',
            'price' => 'required|numeric',
            'year' => 'required|numeric',
            'location' => 'required|string|max:255',
        ]);

        // Update the vehicle
        $vehicle->update([
            'model' => $request->model,
            'price' => $request->price,
            'year' => $request->year,
            'location' => $request->location,
        ]);

        // Redirect back with success message
        return redirect()->route('inventory.inventory')->with('success', 'Vehicle updated successfully.');
    }
}
