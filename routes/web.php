<?php

use App\Http\Controllers\Appointment\AppointmentController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\VehicleController;
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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', [HomeController::class, 'index']);

require __DIR__ . '/auth.php';

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Appointment Routes
    Route::get('/appointments', [AppointmentController::class, 'index']);
    Route::post('/appointments', [AppointmentController::class, 'store']);
    Route::post('/appointments/{appointmentId}', [AppointmentController::class, 'applyForAppointment']);
    Route::post('/appointments/{appointmentId}/cancel', [AppointmentController::class, 'cancel']);
    Route::delete('/appointments/{appointmentId}', [AppointmentController::class, 'destroy']);

    // Vehicle Routes
    Route::get('/vehicles', [VehicleController::class, 'index']);
    Route::get('/vehicles/create', [VehicleController::class, 'create']);
    Route::post('/vehicles', [VehicleController::class, 'store']);
    Route::post('/vehicles/{vehicleId}/update', [VehicleController::class, 'update']);
    Route::get('/vehicles/{vehicleId}/edit', [VehicleController::class, 'edit']);

    // Location Routes
    Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/locations/create', [LocationController::class, 'create']);
    Route::post('/locations', [LocationController::class, 'store']);
    Route::post('/locations/{locationId}/update', [LocationController::class, 'update']);
    Route::get('/locations/{locationId}/edit', [LocationController::class, 'edit']);
    Route::delete('/locations/{locationId}', [LocationController::class, 'destroy']);
});
