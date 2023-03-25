<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Presentazione',
            'Collaboratori',
            'Estratto',
            'Ringraziamenti',
            'Off Topic',
        ];

        foreach ($categories as $key => $value) {
            $newCategory = Category::create([
                'name' => $category,
                'slug' => Str::slug($category)
            ])
        }
    }
}
