<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoliticsPartyFactory extends Factory
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
                return User::factory()->create()->id;
            },
            'name' => $this->faker->name,
            'logo' => $this->faker->text( $this->faker->numberBetween([100],[250]) ),
            'message' => $this->faker->text( $this->faker->numberBetween([100],[250]) ),
            'description' => $this->faker->text( $this->faker->numberBetween([100],[250]) ),
            'subscription' => $this->faker->boolean,
        ];
    }
}
