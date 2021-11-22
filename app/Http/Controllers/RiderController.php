<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class RiderController extends Controller
{
    public function index()
    {
        $openAppointments = Appointment::open()->get();
        $bookedAppointments = Appointment::booked()->get();
        $completedAppointments = Appointment::completed()->get();
        return inertia('Rider/Index', [
            'openAppointments' => $openAppointments,
            'bookedAppointments' => $bookedAppointments,
            'completedAppointments' => $completedAppointments,
        ]);
    }
}
