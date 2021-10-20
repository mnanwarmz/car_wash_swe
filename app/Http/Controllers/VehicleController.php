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

    public function create()
    {
        return inertia('Vehicle/Create');
    }
    public function destroy($vehicleId)
    {
        $vehicles = Vehicle::findOrFail($vehicleId);
        // do not delete if user_id is not null
        if ($vehicles->user_id == null)
            $vehicles->delete();
        else
            dd('You cannot delete this appointment');
    }
}
