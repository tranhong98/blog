<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\File;

$factory->define(Article::class, function (Faker $faker) {
    $filepath = storage_path('images');

    if(!File::exists($filepath)){
        File::makeDirectory($filepath);
    }
    return [
        'name' => $faker->text(10),
        'brief' => $faker->text(20),
        'content' => $faker->text(50),
        'image' => $faker->image($filepath,640,480, null,false),
        'views' => $faker->numberBetween(10, 100),
        'category_id'=>null,
        'user_id'=>null,

    ];
});
