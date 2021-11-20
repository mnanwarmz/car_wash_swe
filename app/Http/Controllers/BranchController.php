<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Branch;
use App\Models\Location;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $auth = auth()->user();
        return inertia('Branch/Index', [
            'auth' => $auth,
        ]);
    }

    public function appointments()
    {
        $appointments = Appointment::latest()->get();
        return inertia('Branch/Appointments', [
            'appointments' => $appointments,
        ]);
    }

    public function locations()
    {
        $locations = Location::latest()->get();
        $branches = Branch::latest()->get();
        return inertia('Branch/Locations', [
            'locations' => $locations,
            'branches' => $branches,
        ]);
    }

    public function create()
    {
        // Inquire on branch location
        // Inquire on branch name
        return inertia('Branch/Create');
    }

    public function store(Request $request)
    {
        // Create Location
        // Link Location to Branch
        // Create Branch
        // Link Branch to Current User
        Branch::create([
            'name' => $request->name,
            'location_id' => $request->location_id,
            'user_id' => auth()->user()->id,
            'status' => 'Inactive'
        ]);
        // Once Branch is deemed valid, give user branch manager role
    }
}
