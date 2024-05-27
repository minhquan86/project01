<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'display_name' => 'admin',
            'password' => '12345678',
            'email' => 'admin@admin.com',
            'role' => 1,
            'phone' => '0123456789'
        ]);

        Category::create([
            'name' => 'ĐỒ CÔNG SỞ',
        ]);

        Category::create([
            'name' => 'ĐỒ THỂ THAO',
        ]);

        Category::create([
            'name' => 'ĐỒ HÈ',
        ]);

        Product::create([
            'name' => 'Product 1',
            'category_id' => 1,
            'price' => 100000,
            'image' => 'https://picsum.photos/200/300',
            'status' => 0,
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => 200000,
            'image' => 'https://picsum.photos/200/300',
            'category_id' => 1,
            'status' => 0,
        ]);

        Product::create([
            'name' => 'Product 3',
            'price' => 300000,
            'category_id' => 2,
            'image' => 'https://picsum.photos/200/300',
            'status' => 0,
        ]);
    }
}
