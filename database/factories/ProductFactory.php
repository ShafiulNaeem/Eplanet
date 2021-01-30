<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SecondarySubCategory;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'unique_id' => Str::random(9),
            'admin_id' => function(){
                return Admin::all()->random();
            },
            'brand_id' => function(){
                return Brand::all()->random();
            },
            'category_id' => function(){
                return Category::all()->random();
            },
            'sub_categories_id' => function(){
                return SubCategory::all()->random();
            },
            'secondary_sub_categories_id' => function(){
                return SecondarySubCategory::all()->random();
            },
            'product_name' => $this->faker->name,
            'product_description' => $this->faker->text(200),
            'feature_image' => $this->faker->image(public_path('images'), 640, 480,null, false),
            'stock' => $this->faker->numberBetween(10, 400),
            'size' => $this->faker->randomElement([
                'M', 'S', 'XL', 'XXL'
            ]),
            'model'=> $this->faker->hexColor,
            'product_price' => $this->faker->randomFloat(1, 40, 500),
            'tax' => $this->faker->numberBetween(1, 40),
            'manufactured_by' => $this->faker->name,
            'color' => $this->faker->colorName,
            'sold' => $this->faker->numberBetween(2, 30),
            'is_new' => $this->faker->numberBetween(1, 2)
        ];
    }
}
