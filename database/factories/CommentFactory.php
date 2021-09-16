<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->realText(30),
        'article_id' => $faker->numberBetween(1, 50),
        'user_id' => $faker->numberBetween(1, 50),
    ];
});
