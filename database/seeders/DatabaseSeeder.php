<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        /*
        product_number
        desc 
        name 
        branch 
        price         // User::factory(10)->create();
        */

        Product::factory(50)->create();
    }
}
