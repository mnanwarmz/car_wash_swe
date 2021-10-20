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

    public function applyForAppointment($appointmentId)
    {
        $appointment = Appointment::findOrFail($appointmentId);
        $appointment->attachUser(auth()->id());
        $appointment->save();
    }

    // public function update(Request $request, $appointmentId)
    // {
    //     $appointment = Appointment::findOrFail($appointmentId);
    //     $data = $request->validate([
    //         'start_at' => 'required',
    //         'end_at' => 'required',
    //         'location_id' => 'required|exists:locations,id',
    //         'type' => 'required',
    //         'status' => 'required',
    //         'rate' => 'required',
    //     ]);
    //     $appointment->update($data);
    // }

    public function destroy($appointmentId)
    {
        $appointment = Appointment::findOrFail($appointmentId);
        if ($appointment->user_id == null)
            $appointment->delete();
        else
            return ('You can not delete this appointment');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'start_at' => 'required',
            'end_at' => 'required',
            'location_id' => 'required|exists:locations,id',
            'appointment_type_id' => 'required|exists:appointment_types,id',
            'status' => 'required',
            'rate' => 'required',
        ]);
        Appointment::create($data);
        return inertia('Appointment/Index');
    }
}
