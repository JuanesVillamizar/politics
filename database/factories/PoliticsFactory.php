<?php

namespace Database\Factories;

use App\Models\Politics_party;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoliticsFactory extends Factory
{

    private $id = 700;
    private $id_party = 0;

    private function getID(){
        $this->id += 1;
        return $this->id - 1;
    }

    private function getIDParty(){
        $this->id += 1;
        return $this->id - 1;
    }

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
            'politics_parties_id' => function () {
                return Politics_party::factory()->create()->id;
            },
            'name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'image' => $this->faker->text(50),
            'country' => $this->faker->text(50),
            'city' => $this->faker->text(50),
            'personal_information' => $this->faker->text(1000),
            'political_career' => $this->faker->text(1000),
            'political_achievements' => $this->faker->text(1000),
            'goals' => $this->faker->text(500),
        ];
    }
}
