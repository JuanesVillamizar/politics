<?php

namespace Database\Seeders;

use App\Models\Politics_party;
use Illuminate\Database\Seeder;

class PoliticsPartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Politics_party::factory(100)->create();
    }
}
