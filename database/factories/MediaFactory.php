<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Media;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\File;

$factory->define(Media::class, function (Faker $faker) {
    $filepath = storage_path('app/public');
    if (!File::exists($filepath)) {
        File::makeDirectory($filepath);
    }

    return [
        'name' => $faker->image($filepath),

    ];
});
