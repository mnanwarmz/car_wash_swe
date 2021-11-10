<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::latest()->get();
        return inertia('Location/Index', compact('locations'));
    }
    public function destroy($id)
    {
        $location = Location::find($id);
        $location->delete();
        return redirect('/locations');
    }
}
