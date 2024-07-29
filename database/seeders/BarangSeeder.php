<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Category;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 30; $i++) {
                Barang::create([
                    'nama' => 'Barang ' . $i . ' dari ' . $category->name,
                    'deskripsi' => 'Deskripsi barang ' . $i,
                    'harga' => rand(10000, 100000),
                    'category_id' => $category->id,
                    'gambar' => 'https://via.placeholder.com/400x300',
                ]);
            }
        }
    }
}
