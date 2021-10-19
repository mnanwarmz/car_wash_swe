<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
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
                'name' => "Micro",
                'slug' => "micro",
            ],
            [
                'name' => "Hatchback",
                'slug' => "hb",
            ],
            [
                'name' => "Sedan",
                'slug' => "sedan",
            ],
            [
                'name' => "SUV",
                'slug' => "suv",
            ],
            [
                'name' => "MPV",
                'slug' => "mpv",
            ],
            [
                'name' => "Convertible",
                'slug' => "convertible",
            ],
            [
                'name' => "Wagon",
                'slug' => "wagon",
            ],
            [
                'name' => "Luxury",
                'slug' => "luxury",
            ],
            [
                'name' => "Antique",
                'slug' => "antique",
            ],
            [
                'name' => "Coupe",
                'slug' => "coupe",
            ],
            [
                'name' => "Sports Car",
                'slug' => "sports",
            ],
            [
                'name' => "Supercar",
                'slug' => "super",
            ],
            [
                'name' => "Muscle Car",
                'slug' => "muslce",
            ],
            [
                'name' => "Limousine",
                'slug' => "limo",
            ],
            [
                'name' => "Hybrid Car",
                'slug' => "hybrid",
            ],
            [
                'name' => "Electric Car",
                'slug' => "electric",
            ],
            [
                'name' => "Diesel Car",
                'slug' => "diesel",
            ],
        ];

        foreach ($types as $type)
            VehicleType::factory()->create($type);
    }
}
