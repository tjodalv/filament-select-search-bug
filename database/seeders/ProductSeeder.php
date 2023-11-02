<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['code' => '1234', 'name' => 'Pepsi']);
        Product::create(['code' => '5678', 'name' => 'Coca-cola']);
        Product::create(['code' => '4321', 'name' => 'Fanta']);
        Product::create(['code' => '8765', 'name' => 'Sprite']);
        Product::create(['code' => '9927', 'name' => 'Water 0.5 l']);
        Product::create(['code' => '8125', 'name' => 'Juicy Peach']);
        Product::create(['code' => '4497', 'name' => 'Juicy Pineapple']);
    }
}
