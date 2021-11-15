<?php

namespace Database\Seeders;

use App\Models\AppointmentType;
use Illuminate\Database\Seeder;

class AppointmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => "Wash",
                'slug' => "wash",
                'price' => 7,
            ],
            [
                'name' => "Polish",
                'slug' => "polish",
                'price' => 10,
            ],
            [
                'name' => "Vacuum",
                'slug' => "vacuum",
                'price' => 5,
            ],

        ];

        foreach ($types as $type)
            AppointmentType::create($type);
    }
}
