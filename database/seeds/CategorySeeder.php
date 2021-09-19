<?php

use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create([
            'categorizable_type' => Article::class
        ]);

        factory(Category::class, 10)->create([
            'categorizable_type' => Product::class
        ]);
    }
}
