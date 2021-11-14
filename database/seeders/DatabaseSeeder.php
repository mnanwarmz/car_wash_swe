<?php

namespace Database\Seeders;

use App\Models\AppointmentType;
use App\Models\VehicleType;
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
        \App\Models\Appointment::factory(10)->create();
        \App\Models\Vehicle::factory(10)->for($user)->create();
        \App\Models\Location::factory()->for($user)->create();
        \App\Models\User::factory(10)->create();
    }
}
