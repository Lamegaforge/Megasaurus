<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Clip;
use App\Curator;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Clip::class, function (Faker $faker) {
    return [
        'slug' => $faker->unique()->slug,
        'tracking_id' => $faker->unique()->numberBetween(1000, 10000),
        'title' => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true),
        'url' => $faker->unique()->url,
        'game' => $faker->unique()->sentence($nbWords = 2),
        'views' => $faker->numberBetween($min = 100, $max = 500),
        'active' => $faker->boolean,    
        'curator_id' => Curator::inRandomOrder()->first()->id,
    ];
});
