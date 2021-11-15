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
    public function show($vehicleId)
    {
        $vehicle = Vehicle::find($vehicleId);
        return inertia('Vehicle/Show', compact('vehicle'));
    }

    // public function delete()
    // {
    //     $data=Vehicle::find($plate_no);
    //      return inertia('Vehicle/Index', compact('vehicles'));
    // }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'plate_no' => 'required',
    //         'brand' => 'required',
    //         'model' => 'required',
    //         'type' => 'required'
    //     ]);

    //     Vehicle::create(['user_id' => auth()->id()] + $data);
    //     return inertia('Vehicle/Index');
    // }
    public function store(Request $request)
    {
        $data = $request->validate([
            'plate_no' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'vehicle_type_id' => 'required|exists:vehicle_types,id'
        ]);
        Vehicle::create($data + ['user_id' => auth()->id()]);
    }

    public function create()
    {
        return inertia('Vehicle/Create');
    }
    public function destroy($vehicleId)
    {
        $vehicles = Vehicle::findOrFail($vehicleId);
        // do not delete if user_id is not null
            $vehicles->delete();
    }
    public function edit($vehicleId)
    {
        $vehicle = Vehicle::findOrFail($vehicleId);
        return inertia('Vehicle/Edit', compact('vehicle'));
    }

    public function update(Request $request, $vehicleId)
    {
        $data = $request->validate([
            'plate_no' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'vehicle_type_id' => 'required|exists:vehicle_types,id'
        ]);
        $vehicle = Vehicle::findOrFail($vehicleId);
        $vehicle->fill($data);
        $vehicle->save();
    }
}
