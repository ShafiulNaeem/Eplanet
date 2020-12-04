<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::factory(3)->create();
        Brand::factory(10)->create();
        Category::factory(7)->create();
        Coupon::factory(5)->create();
        SubCategory::factory(21)->create();
        Product::factory(30)->create();
    }
}
