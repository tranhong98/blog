<?php

use App\Models\Media;
use App\Models\User;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{

    public function run()
    {
        factory(Media::class, 12)->create([
            'media_type' => User::class,
        ]);

        factory(Media::class, 10)->create([
            'media_type' => Product::class,
        ]);
    }
}
