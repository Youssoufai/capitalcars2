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
            'condition' => 'nullable|string',
            'transmisson' => 'nullable|string',
            'bodytype' => 'nullable|string',
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
            'condition' => $request->condition,
            'transmission' => $request->transmission,
            'bodytype' => $request->bodytype
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
        return redirect()->route('admin.dashboard')->with('success', 'Vehicle deleted successfully.');
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
            'condition' => 'nullable|string',
            'transmisson' => 'nullable|string',
            'bodytype' => 'nullable|string',
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
        return redirect()->route('admin');
    }

    public function filter(Request $request)
    {
        // Start with the basic query
        $query = Vehicle::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('model', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('dealer_name', 'like', "%{$search}%");
            });
        }
        // Filter by condition (if provided)
        if ($request->has('condition') && count($request->condition) > 0) {
            $query->whereIn('condition', $request->condition);
        }

        // Filter by price (if provided)
        if ($request->has('price') && count($request->price) > 0) {
            foreach ($request->price as $priceRange) {
                switch ($priceRange) {
                    case '0-10M':
                        $query->orWhereBetween('price', [0, 10000000]);
                        break;
                    case '10M-30M':
                        $query->orWhereBetween('price', [10000000, 30000000]);
                        break;
                    case '30M-40M':
                        $query->orWhereBetween('price', [30000000, 40000000]);
                        break;
                    case 'above40M':
                        $query->orWhere('price', '>', 40000000);
                        break;
                }
            }
        }

        // Filter by transmission (if provided)
        if ($request->has('transmission') && count($request->transmission) > 0) {
            $query->whereIn('transmission', $request->transmission);
        }

        // Filter by body type (if provided)
        if ($request->has('bodytype') && count($request->bodytype) > 0) {
            $query->whereIn('bodytype', $request->bodytype);
        }

        // Filter by model (if provided)
        if ($request->has('model') && $request->model != '') {
            $query->where('model', $request->model);
        }

        // Filter by year (if provided)
        if ($request->has('year') && $request->year != '') {
            $query->where('year', $request->year);
        }

        // Get the filtered vehicles
        $vehicles = $query->get();

        // Return the view with the filtered vehicles
        return view('inventory.inventory', compact('vehicles'));
    }
}
