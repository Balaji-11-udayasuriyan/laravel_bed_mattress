<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $products = [

            [
            
                'name' => 'comfort',
                'description' => 'A soft and durable mattress'
            
            ]
        ];

        foreach ($products as $row){

            $row['slug']= Str::slug($row['name']);

            Product::create($row);
        }
    }
}
