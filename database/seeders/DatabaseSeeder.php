<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;


use Illuminate\Database\Seeder;
//use App\Models\Product;
//use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory(5)->create();

        $product = Product::factory(50)->create();
        //\App\Models\Product::factory()->count(50)->create();
        $review = Review::factory(100)->create();
        //\App\Models\Review::factory()->count(100)->create();
    }
}
