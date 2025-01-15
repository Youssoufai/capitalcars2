<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //
    public function index()
    {
        $vehicles = Vehicle::all();

        // Pass vehicles to the view
        return view('inventory.inventory', compact('vehicles'));
    }
}
