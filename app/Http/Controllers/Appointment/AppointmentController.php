<?php

namespace App\Http\Controllers\Appointment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with(['location'])->latest()->get();
        return inertia('Appointment/Index', ['appointments' => $appointments]);
    }

    public function create()
    {
        return inertia('Appointment/Create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'start_at' => 'required',
            'end_at' => 'required',
            'location_id' => 'required|exists:locations,id',
            'type' => 'required',
            'status' => 'required',
            'rate' => 'required',
        ]);
        Appointment::create($data);
        return inertia('Appointment/Index');
    }
}
