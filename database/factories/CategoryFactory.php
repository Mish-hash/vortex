<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    $name = $faker->words($nb = 3, $asText = true);

    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'img_url' => $faker->randomElement(['https://loremflickr.com/320/240', null])
    ];
});
