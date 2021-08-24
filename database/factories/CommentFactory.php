<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text(15),
        'view' => $faker->numberBetween(0, 10),
        'article_id' => $faker->numberBetween(1, 50),
    ];
});
