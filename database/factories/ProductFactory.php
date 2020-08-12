<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->words($nb = 2, $asText = true);
    $categories = App\Category::all()->pluck('id')->toArray();
    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'img_url' => $faker->randomElement(['https://loremflickr.com/320/240', null]),
        'price' => $faker->randomFloat(2, 10, 10000),
        'recommended' => $faker->boolean(),
        'category_id' => $faker->randomElement($categories),
    ];
});
