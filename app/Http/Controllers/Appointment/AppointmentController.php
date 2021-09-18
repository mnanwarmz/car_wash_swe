<?php

namespace App\Http\Controllers\Appointment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with(['location'])->latest()->paginate(10);
        return inertia('Appointment/Index', compact('appointments'));
    }

    public function create()
    {
        return inertia('Appointment/Create');
    }
}
