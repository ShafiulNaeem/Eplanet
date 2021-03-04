<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\District;
use App\Models\Division;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = District::class;

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
            'division_id' => function(){
                return Division::all()->random();
            },
            'district_name' => $this->faker->city
        ];
    }
}
