<?php

use App\Http\Controllers\Controller;
use App\Models\TestDrive;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $testDrives = TestDrive::all();
        return view('admin.test-drives.index', compact('testDrives'));
    }
    public function update(Request $request, $id) {}
}
