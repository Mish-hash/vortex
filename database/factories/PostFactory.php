<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(7);
    return [
        'title' => $title,
        'slug' => Str::slug($title, '-'),
        'description' => $faker->paragraphs(2, true),
        'img_url' => $faker->randomElement(['https://loremflickr.com/320/240', null]),
    ];
});
