<?php

namespace App\Database\Seeds;

use App\Models\Product;
use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $product = new Product();

        $product->insertBatch([
            [
                'name' => 'Apel',
                'price' => 2500
            ],
            [
                'name' => 'Brokoli',
                'price' => 7500
            ]
        ]);
    }
}