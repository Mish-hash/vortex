<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->words($nb = 2, $asText = true);
    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'img_url' => $faker->randomElement([$faker->imageUrl($width = 320, $height = 240, 'cats'), null]),
        'price' => $faker->randomFloat(2, 10, 10000),
        'recommended' => $faker->boolean(),
        'category_id' => $faker->numberBetween(1, 5),
    ];
});
