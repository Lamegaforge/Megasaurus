<?php

use Illuminate\Database\Seeder;

use App\Curator;

class CuratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Curator::class, 10)->create();
    }
}
