<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function user()
    {
        $vehicles = auth()->user()->vehicles;
        $locations = auth()->user()->locations;
        $appointments = auth()->user()->appointments;
        return inertia('User/Dashboard', [
            'vehicles' => $vehicles,
            'locations' => $locations,
            'appointments' => $appointments,
        ]);
    }
}
