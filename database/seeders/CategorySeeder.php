<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Gelang', 'slug' => 'gelang'],
            ['name' => 'Kalung', 'slug' => 'kalung'],
            ['name' => 'Dompet', 'slug' => 'dompet'],
            ['name' => 'Sabuk', 'slug' => 'sabuk'],
            ['name' => 'Declock', 'slug' => 'declock']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
