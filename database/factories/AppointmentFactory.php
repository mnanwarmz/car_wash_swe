<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\AppointmentType;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start_at' => $this->faker->date,
            'end_at' => $this->faker->date,
            'status' => $this->faker->numberBetween(1, 3),
            'status' => $this->faker->numberBetween(1, 3),
            'rate' => $this->faker->numberBetween(1, 3),
            'location_id' => Location::factory(),
            'appointment_type_id' => AppointmentType::factory(),
        ];
    }
}
