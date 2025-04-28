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
            "product_id" => function () {
                return Product::GetActive()->get()->random();
            },
            "admin_id" => function () {
                return Admin::GetActive()->get()->random();
            },
            "product_image" => app('ImageGenerator')->generate(),
        ];
    }
}
