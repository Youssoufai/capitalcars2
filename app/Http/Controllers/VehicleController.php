<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all(); // Fetch all vehicles
        return view('inventory.index', compact('vehicles'));
    }
}