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
		$location = $request->validate([
			'address' => 'required',
			'city' => 'required',
			'state' => 'required',
			'postcode' => 'required',
		]);
        // Link Location to Branch
		$newLocation = Location::create($location);
        // Create Branch
        // Link Branch to Current User
        Branch::create([
            'name' => $request->name,
            'location_id' => $newLocation->id,
            'user_id' => auth()->user()->id,
            'status' => 'Inactive'
        ]);
        // Once Branch is deemed valid, give user branch manager role
		return redirect('/');
    }
}
