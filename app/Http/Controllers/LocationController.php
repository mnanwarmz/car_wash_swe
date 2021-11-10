<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function destroy($id)
    {
        $location = Location::find($id);
        $location->delete();
        return redirect('/locations');
    }
}
