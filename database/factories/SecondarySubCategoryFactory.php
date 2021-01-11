<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Category;
use App\Models\SecondarySubCategory;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SecondarySubCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SecondarySubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admin_id' => function(){
                return Admin::all()->random();
            },
            'category_id' => function(){
                return Category::all()->random();
            },
            'sub_category_id' => function(){
                return SubCategory::all()->random();
            },
            'secondary_subcategory_name' => $this->faker->name
        ];
    }
}
