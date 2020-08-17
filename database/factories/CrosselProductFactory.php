<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CrosselProduct;
use Faker\Generator as Faker;

$factory->define(CrosselProduct::class, function (Faker $faker) {
    $products = App\Product::all()->pluck('id')->toArray();
    $product_id = $faker->randomElement($products);
    // $count = $faker->numberBetween(1, 3);
    $crossel_id = $faker->randomElement($products);

    if($product_id = $crossel_id) {
        $crossel_id = $faker->randomElement($products);
    }
    
    return [
        'product_id' => $product_id,
        'crossel_id' => $crossel_id,
    ];
});

// 'crossel_id' => implode(',', $faker->randomElements($products, $count)),
