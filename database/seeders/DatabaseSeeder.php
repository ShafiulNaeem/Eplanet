<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\Reply;
use App\Models\SubCategory;
use App\Models\User;
use App\Models\Comment;
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
        User::factory(4)->create();

        Blog::factory(10)->create();
        Comment::factory(15)->create();
        Reply::factory(15)->create();
    }
}
