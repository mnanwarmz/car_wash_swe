<?php

namespace Database\Factories;

use App\Models\AppointmentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AppointmentType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Wash', 'Vacuum', 'Wax', 'Polish']),
            'slug' => $this->faker->word,
            'price' => $this->faker->randomFloat(10, 0, 20),
        ];
    }
}
