<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "product_id" => function(){
                return Product::all()->random();
            },
            "admin_id" => function(){
                return Admin::all()->random();
            },
            "product_image" => $this->faker->image(public_path('images'), 640, 480,null, false)
        ];
    }
}
