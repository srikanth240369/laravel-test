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
        $products = [
            'Gold Coffee',
            'Arabic Coffee'
        ];

        foreach ($products as $key => $product) {
            Product::firstOrCreate([
                'name'=>$product,
                'unit_cost'=>10,
                'profit_margin'=>15,
                'shipping_cost'=>10
            ]);
        }
    }
}
