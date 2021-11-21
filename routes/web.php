<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Appointment\AppointmentController;
use App\Http\Controllers\AppointmentTypeController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PermissionTestController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\VehicleController;
use App\Models\AppointmentType;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/pricing', [HomeController::class, 'pricing']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/vehicles/{vehicleId}/update', [VehicleController::class, 'update'])->middleware('auth');
Route::post('/contact', [HomeController::class, 'contactStore']);
require __DIR__ . '/auth.php';

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('User/Dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Appointment Routes
    Route::get('/appointments', [AppointmentController::class, 'index']);
    Route::get('/appointments/create', [AppointmentController::class, 'create']);
    Route::get('/appointments/{appointmentId}', [AppointmentController::class, 'show']);
    Route::post('/appointments', [AppointmentController::class, 'store']);
    Route::post('/appointments/{appointmentId}', [AppointmentController::class, 'applyForAppointment']);
    Route::post('/appointments/{appointmentId}/cancel', [AppointmentController::class, 'cancel']);
    Route::delete('/appointments/{appointmentId}', [AppointmentController::class, 'destroy']);

    // Vehicle Routes
    Route::get('/vehicles', [VehicleController::class, 'index']);
    Route::get('/vehicles/create', [VehicleController::class, 'create']);
    Route::get('/vehicles/{vehicleId}', [VehicleController::class, 'show']);
    Route::get('/vehicles/{vehicleId}/edit', [VehicleController::class, 'edit']);
    Route::post('/vehicles/create', [VehicleController::class, 'store']);

    // Location Routes
    Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/locations/create', [LocationController::class, 'create']);
    Route::post('/locations', [LocationController::class, 'store']);
    Route::post('/locations/{locationId}/update', [LocationController::class, 'update']);
    Route::get('/locations/{locationId}/edit', [LocationController::class, 'edit']);
    Route::delete('/locations/{locationId}', [LocationController::class, 'destroy']);

    // Branch Routes
    Route::get('/branches/create', [BranchController::class, 'create']);
    Route::post('/branches/store', [BranchController::class, 'store']);
});

Route::middleware(['role:admin', 'auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('/admin/dashboard/users', [AdminController::class, 'users']);
    Route::get('/admin/dashboard/vehicles', [AdminController::class, 'vehicles']);
    Route::get('/admin/dashboard/branches', [AdminController::class, 'branches']);
    Route::get('/admin/dashboard/appointments', [AdminController::class, 'appointments']);
});

Route::middleware(['role:branch manager', 'auth'])->group(function () {
    Route::get('/branch/dashboard', [BranchController::class, 'index']);
    Route::get('/branches/appointments', [BranchController::class, 'appointments']);
    Route::get('/branches/locations', [BranchController::class, 'locations']);
});

Route::middleware(['role:rider', 'auth'])->group(function () {
    Route::get('/rider/dashboard', [RiderController::class, 'index']);
});
