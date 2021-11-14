<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ServiceSuffixes = ['Regular','Premuim','Interior','Deepclean'];
        $name = $this->faker->company . ' ' . $this->faker->randomElement($ServiceSuffixes);

        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->word,
            'description' => $this->faker->realText(320),
            'price' => $this->faker->numberBetween(100, 1000), // $100 - $1000
           
        ];
    }
}
