<?php

namespace Database\Seeders;

use App\Models\Politics;
use Illuminate\Database\Seeder;

class PoliticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Politics::factory(300)->create();
    }
}
