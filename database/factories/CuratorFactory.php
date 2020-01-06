<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
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

$factory->define(Curator::class, function (Faker $faker) {
    return [
        'tracking_id' => $faker->unique()->numberBetween(1000, 10000),
        'name' => $faker->name,
        'display_name' => $faker->name,
        'channel_url' => $faker->url,
        'logo' => $faker->imageUrl($width = 50, $height = 50, 'cats'),
    ];
});
