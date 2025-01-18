<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    public function store(Request $request)
    {

        // Validate Vehicle Data
        $validated = $request->validate([
            'model' => 'required|string|max:255',
            'image' => 'nullable|file|max:9000|mimes:webp,png,jpg,jpeg',
            'price' => 'required|numeric|min:1',
            'mileage' => 'required|string|max:255',
            'drivetrain' => 'required|string|max:255',
            'engine' => 'required|string|max:255',
            'year' => 'required|numeric|digits:4|before_or_equal:' . date('Y'),
            'dealer_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $path = null;
        // Store image
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('car_images', $request->image);
        }


        // Create Vehicle

        Vehicle::create([
            'model' => $request->model,
            'image' => $path,
            'price' => $request->price,
            'mileage' => $request->mileage,
            'drivetrain' => $request->drivetrain,
            'engine' => $request->engine,
            'year' => $request->year,
            'dealer_name' => $request->dealer_name,
            'location' => $request->location,
            'description' => $request->description,
        ]);

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

        // Delete vehicle image if exists


        if ($vehicle->image) {
            Storage::disk('public')->delete($vehicle->image);
        }

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
        $validatedData = $request->validate([
            'model' => 'required|string|max:255',
            'price' => 'required|numeric',
            'year' => 'required|numeric',
            'location' => 'required|string|max:255',
            'image' => 'nullable|file|max:9000|mimes:webp,png,jpg,jpeg',
            'mileage' => 'nullable|numeric',
            'drivetrain' => 'nullable|string|max:255',
            'engine' => 'nullable|string|max:255',
            'dealer_name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($vehicle->image && Storage::disk('public')->exists($vehicle->image)) {
                Storage::disk('public')->delete($vehicle->image);
            }

            // Store the new image and update the path
            $path = $request->file('image')->store('car_images', 'public');
            $validatedData['image'] = $path;
        }

        // Update the vehicle record
        $vehicle->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('inventory.inventory')->with('success', 'Vehicle updated successfully.');
    }
}
