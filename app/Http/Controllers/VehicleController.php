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

    public function create()
    {
        return inertia('Vehicle/Create');
    }

    public function store()
    {
        $data = request()->validate([
            'plate_no' => 'required',
            'brand' => 'required',
            'model' => 'string',
            'type' => 'required'
        ]);

        $vehicle = Vehicle::create($data);
        $vehicle->user_id = auth()->id();
        $vehicle->save();
        return inertia('Vehicle/Index');
    }
}
