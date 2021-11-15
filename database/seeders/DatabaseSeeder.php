<?php

namespace Database\Seeders;

use App\Models\AppointmentType;
use App\Models\VehicleType;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VehicleTypeSeeder::class);
        $this->call(PermissionSeeder::class);
        $user = \App\Models\User::factory()->create(['email' => "test@test.com"]);
        $admin = \App\Models\User::factory()->create(['email' => "admin@test.com"]);
        $admin->assignRole('admin');
        \App\Models\Appointment::factory()->create();
        \App\Models\Vehicle::factory()->for($user)->create();
        \App\Models\Service::factory()->create();

        Service::factory()->count(5)->create();
        VehicleType::factory()->count(40)->create();

        $VehicleType = VehicleType::all();
        Service::all()->each(function ($service) use ($VehicleType) {
            $service->vehicleTypes()->attach
            ($VehicleType->random(1, 5)->pluck('id')->toArray());
        });

        \App\Models\Location::factory()->for($user)->create();
    }
}
