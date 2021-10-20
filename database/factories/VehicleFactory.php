<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plate_no' => $this->faker->bothify("??? ####"),
            'brand' => $this->faker->word(),
            'model' => $this->faker->word(),
            'vehicle_type_id' => VehicleType::factory(),
        ];
    }
}
