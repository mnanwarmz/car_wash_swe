<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Branch;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $vehicleCount = Vehicle::count();
        $branchCount = Branch::count();
        $appointmentCount = Appointment::count();
        return inertia('Admin/Index', [
            'userCount' => $userCount,
            'vehicleCount' => $vehicleCount,
            'branchCount' => $branchCount,
            'appointmentCount' => $appointmentCount,
        ]);
    }

    public function users()
    {
        $users = User::latest()->get();
        return inertia('Admin/Users', [
            'users' => $users,
        ]);
    }
}
