<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::latest()->where(['user_id' => auth()->id()])->get();
        return inertia('Location/Index', compact('locations'));
    }
    public function create()
    {
        return inertia('Location/Create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
        ]);
        Location::create($data +  ['user_id' => auth()->id()]);
    }
    public function edit(Location $locationId)
    {
        $location = Location::find($locationId);
        return inertia('Location/Edit', compact('location'));
    }
    public function update(Request $request, $locationId)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
        ]);
        $location = Location::findOrFail($locationId);
        $location->fill($data);
        $location->save();
    }
    public function destroy($locationId)
    {
        $location = Location::find($locationId);
        $location->delete();
        return redirect('/locations');
    }
}
