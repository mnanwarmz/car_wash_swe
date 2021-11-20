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
        $branch = \App\Models\User::factory()->create(['email' => "branch@test.com"]);
        $branch->assignRole('branch');
        \App\Models\Appointment::factory()->create();
        \App\Models\Vehicle::factory()->for($user)->create();
        \App\Models\Location::factory()->for($user)->create();
    }
}
