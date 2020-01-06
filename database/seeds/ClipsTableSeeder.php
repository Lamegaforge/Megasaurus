<?php

use Illuminate\Database\Seeder;

use App\Clip;

class ClipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Clip::class, 200)->create();
    }
}
