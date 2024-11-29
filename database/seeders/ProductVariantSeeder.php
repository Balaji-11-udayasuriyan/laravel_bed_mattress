<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ProductVariant;
use App\Models\Size;
use App\Models\Thickness;
use App\Models\Product;

class ProductVariantSeeder extends Seeder

{
    
    public function run(): void
    {

        $sizes = Size::all();
        $thicknesses = Thickness::all();
        $products = Product::all();
        
        $productvariants= [

            [
                'product_id' => $products->where('name', 'comfort')->first()->id,
                'size_id' => $sizes->where('name', 'Single')->first()->id,
                'thickness_id' => $thicknesses->where('value_in_inches', '4')->first()->id,
                'dimension_in_inches' => '72x30', 
                'dimension_in_feet' => '6x2.5', 
                'dimension_in_cm' => '183x76',
                // 'product_variant_code' => '7237'
                'price' => '6000'
            ],

            [
                'product_id' => $products->where('name', 'comfort')->first()->id,
                'size_id' => $sizes->where('name', 'Single')->first()->id,
                'thickness_id' => $thicknesses->where('value_in_inches', '4')->first()->id,
                'dimension_in_inches' => '72x36', 
                'dimension_in_feet' => '6x3', 
                'dimension_in_cm' => '183x91',
                // 'product_variant_code' => '8007'
                'price' => '8000'
            ],      

        ];

        foreach ($productvariants as $row){

            ProductVariant::create($row);
        }
    }
}
