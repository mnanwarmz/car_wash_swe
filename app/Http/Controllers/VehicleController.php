<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function index()
    {
        $vehicles = Vehicle::latest()->get();
        return inertia('Vehicle/Index', compact('vehicles'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'plate_no' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required'
        ]);

        Vehicle::create(['user_id' => auth()->id()] + $data);
        return inertia('Vehicle/Index');
    }

    public function create()
    {
        return inertia('Vehicle/Create');
    }
}
