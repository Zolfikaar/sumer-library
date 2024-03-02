<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->createCategories($categories = [
            'Fiction',
            'Science Fiction',
            'Classic',
            'Magical Realism',
            'Fantasy',
            'Satire',
            'Mystery',
            'Horror',
            'Dystopian',
            'Historical Fiction',
            'Young Adult',
            'Post-Apocalyptic',
            'Thriller',
            'Epic Poetry',
            'Gothic',
            'Detective Fiction',
            'Adventure',
        ]);
    }
}
