<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Emi;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Reply;
use App\Models\SecondarySubCategory;
use App\Models\SubCategory;
use App\Models\User;
use App\Models\Comment;
use Database\Factories\SecondarySubCategoryFactory;
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
        SubCategory::factory(10)->create();
        SecondarySubCategory::factory(20)->create();
        Product::factory(10)->create();
        User::factory(4)->create();

        Blog::factory(5)->create();
        Comment::factory(15)->create();
        Reply::factory(15)->create();
        Emi::factory(15)->create();
    }
}
