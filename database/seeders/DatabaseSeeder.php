<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        Category::truncate();


         \App\Models\User::factory(10)->create();
       $category= \App\Models\Category::create([
            'name'=>'Mobile',
            'description'=>"This is category contains laptop"
        ]);

        Product::factory(5)->create();
    }
}
