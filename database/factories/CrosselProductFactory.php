<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CrosselProduct;
use Faker\Generator as Faker;

$factory->define(CrosselProduct::class, function (Faker $faker) {
    $products = App\Product::all()->pluck('id')->toArray();
    $product_id = $faker->randomElement($products);
    $crossel_id = array_diff($products, [$product_id]);

    return [
        'product_id' => $product_id,
        'crossel_id' => $faker->randomElement($crossel_id),
    ];
});

// 'crossel_id' => implode(',', $faker->randomElements($products, $count)),
