<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->realText(10),
        'description' => $faker->realText(20),
        'price' => $faker->numberBetween(1000, 10000),
        'number' => $faker->numberBetween(1, 10),
        'category_id' => null,
        'user_id' => null,
    ];
});
