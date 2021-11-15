<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return Person::factory()->create()->id;
            },
            'cc' => $this->faker->numberBetween([1],[1000000]),
            'tag_name' => $this->faker->text(10),
            'name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'country' => $this->faker->text(50),
            'city' => $this->faker->text(50),
            'img' => $this->faker->text(50),
        ];
    }
}
