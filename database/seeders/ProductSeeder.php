<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Product;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = ['perfume','cream','make_up','accessory'];
        
        foreach($products as $item){
            $product = new Product();

            $product->type = $item;
            $product->save();
        }
    }
}
