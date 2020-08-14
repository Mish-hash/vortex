<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CrosselProduct;
use Faker\Generator as Faker;

$factory->define(CrosselProduct::class, function (Faker $faker) {
    $products = App\Product::all()->pluck('id')->toArray();
    $count = $faker->numberBetween(1, 3);
    return [
        'product_id' => $faker->randomElement($products),
        'crossel_id' => implode(',', $faker->randomElements($products, $count)),
    ];
});
