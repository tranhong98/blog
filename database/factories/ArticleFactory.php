<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\File;

$factory->define(Article::class, function (Faker $faker) {
    $filepath = storage_path('app/public');
    if (!File::exists($filepath)) {
        File::makeDirectory($filepath);
    }

    return [
        'name' => $faker->realText(10),
        'brief' => $faker->realText(20),
        'content' => $faker->realText(100),
        'views' => $faker->numberBetween(10, 100),
        'user_id' => $faker->numberBetween(3, 50),
    ];
});
