<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentsFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_id' => $this->faker->unique()->numberBetween([0],[500]),
            'politics_id' => $this->faker->unique()->numberBetween([0],[500]),
            'comment' => $this->faker->text( $this->faker->numberBetween([100],[250]) ),
            'date_hours' => $this->faker->dateTime(),
        ];
    }
}
