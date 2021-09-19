<?php

use App\Models\Product;
use App\Models\Category;
use App\Models\Media;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 10)->create()->each(function ($product) {
            factory(Media::class)->create([
                'media_type' => Product::class,
                'media_id' => $product->id,
            ]);

            factory(Category::class)->create([
                'categorizable_type' => Product::class,
                'categorizable_id' => $product->id,
            ]);
        });
    }
}
