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

    $path = $faker->image($filepath);
    $paths= explode("/", $path);
    $name = end($paths);

    return [
        'name' => $name,
    ];
});
