<?php

namespace App\Http\Controllers;

use App\Models\AppointmentType;
use Illuminate\Http\Request;

class AppointmentTypeController extends Controller
{
    public function data()
    {
        $appointment_types = AppointmentType::latest()->get();
        return response()->json($appointment_types);
    }
}
