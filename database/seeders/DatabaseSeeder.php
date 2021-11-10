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
        $user = \App\Models\User::factory()->create(['email' => "test@test.com"]);
        \App\Models\Appointment::factory()->create();
<<<<<<< HEAD
        \App\Models\Vehicle::factory()->count(10)->for($user)->create();
=======
        \App\Models\Vehicle::factory()->for($user)->create();
        \App\Models\Location::factory()->for($user)->create();
>>>>>>> 4-appointments-danial
    }
}
