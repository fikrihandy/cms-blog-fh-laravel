<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Linux',
            'slug' => 'linux',
            'color' => 'bg-blue-100',
        ]);

        Category::create([
            'name' => 'Android',
            'slug' => 'android',
            'color' => 'bg-green-100',
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'bg-red-100',
        ]);
    }
}
