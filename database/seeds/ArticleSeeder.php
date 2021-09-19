<?php

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class, 10)->create()->each(function ($article) {
            factory(Category::class)->create([
                'categorizable_type' => Article::class,
                'categorizable_id' => $article->id,
            ]);
        });
    }
}
