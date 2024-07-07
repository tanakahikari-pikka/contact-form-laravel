<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            '質問',
            '要望',
            '感想',
            'その他',
        ];

        foreach ($categories as $category) {
            Category::create(['content' => $category]);
        }
    }
}
