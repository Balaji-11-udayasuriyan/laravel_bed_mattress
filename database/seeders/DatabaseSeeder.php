<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'admin ',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('admin')
        ]);
        

        $this->call(SizeSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(ThicknessSeeder::class);
        $this->call(MattressSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductVariantSeeder::class);
        
    }
}
