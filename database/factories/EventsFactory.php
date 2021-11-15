<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'politics_id' => $this->faker->unique()->numberBetween([0],[500]),
            'politics_parties_id' => $this->faker->unique()->numberBetween([0],[500]),
            'name' => $this->faker->text( $this->faker->numberBetween([100],[250]) ),
            'place' => $this->faker->dateTime(),
            'country' =>$this->faker->unique()->numberBetween([0],[500]),
            'city' => $this->faker->unique()->numberBetween([0],[500]),
            'image' => $this->faker->text( $this->faker->numberBetween([100],[250]) ),
            'date' => $this->faker->dateTime(),
        ];
    }
}
