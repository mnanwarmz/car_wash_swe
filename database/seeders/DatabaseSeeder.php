<?php

namespace Database\Seeders;

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
        $user = \App\Models\User::factory()->create(['email' => "test@test.com"]);
        \App\Models\Appointment::factory()->create();
        \App\Models\Vehicle::factory()->for($user)->create();
    }
}
