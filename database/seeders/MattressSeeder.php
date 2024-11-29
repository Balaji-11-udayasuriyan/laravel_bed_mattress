<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mattress;

class MattressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mattresses = [

            ['name' => 'king', 'size_id' => 4, 'unit_id' => 4, 'thickness_id' => 4],

            ['name' => 'queen', 'size_id' => 3, 'unit_id' => 3, 'thickness_id'=>3],

            
        ];

        foreach ($mattresses as $row){

            Mattress::create($row);
        }
    }
}
