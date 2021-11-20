<?php

namespace App\Http\Controllers\Appointment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentAppointmentType;
use App\Models\AppointmentType;
use Auth;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with(['location'])->latest()->get();
        return inertia('Appointment/Index', ['appointments' => $appointments]);
    }

    public function create()
    {
        $appointment_types = AppointmentType::latest()->get()->toArray();
        $vehicles =  Auth::user()->vehicles()->get()->toArray();
        $locations =  Auth::user()->locations()->get()->toArray();

        // return appointment types array under a data key


        return inertia('Appointment/Create', [
            'appointment_types' => $appointment_types,
            'vehicles' => $vehicles,
            'locations' => $locations,
        ]);
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

    public function cancel($appointmentId)
    {
        $appointment = Appointment::findOrFail($appointmentId);
        $appointment->detachUser(auth()->id());
        $appointment->status = 1;
        // dd($appointment);
        $appointment->save();
    }
    public function show($appointmentId)
    {
        $appointment = Appointment::findOrFail($appointmentId);
        return inertia('Appointment/Show', compact('appointment'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'start_at' => 'required',
            'end_at' => 'required',
            'location_id' => 'required|exists:locations,id',
            'vehicle_id' => 'required|exists:vehicles,id',
            'price' => 'required',
        ]);
        dd($data);
        // $data['start_at'] = Carbon::parse($data['start_at']);
        // $data['end_at'] = Carbon::parse($data['end_at']);

        $appointment_types = $request->validate([
            'appointment_type_ids' => 'required|exists:appointment_types,id',
        ]);
        dd($data);

        $appointment = Appointment::create($data + ['user_id' => auth()->id()]);
        foreach ($appointment_types as $appointment_type) {
            AppointmentAppointmentType::create([
                'appointment_id' => $appointment->id,
                'appointment_type_id' => $appointment_type,
            ]);
        }
        return redirect('/appointments');
    }
}
