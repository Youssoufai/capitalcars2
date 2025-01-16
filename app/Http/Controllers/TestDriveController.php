<?php

namespace App\Http\Controllers;

use App\Models\test_drive;
use App\Http\Requests\Storetest_driveRequest;
use App\Http\Requests\Updatetest_driveRequest;
use App\Models\TestDrive;
use Illuminate\Http\Request;

class TestDriveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $testDrives = TestDrive::all(); // Retrieve all test drive records

        return view('admin.drives.index', ['testDrive' => $testDrives]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('test-drive.book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate Input Parameters for Test Drive

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'vehicle' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
        ]);
        //dd($validatedData);
        TestDrive::create($validatedData);

        return redirect()->route('about')->with('success', 'Test drive scheduled successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TestDrive $testDrive)
    {

        $testDrive = TestDrive::all($testDrive); // Find a specific test drive
        return view('admin.drives.index', compact('testDrive'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TestDrive $test_drive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatetest_driveRequest $request, TestDrive $test_drive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestDrive $test_drive)
    {
        //
    }
}
