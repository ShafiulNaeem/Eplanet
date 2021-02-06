<?php

namespace Database\Factories;

use App\Helper\DeleteFile;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    use DeleteFile;
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function(){
                return User::all()->random();
            },
            'post' => $this->faker->randomElement($this->fakerText()),
            'blog_image' => $this->faker->image(public_path('images'), 640, 480,null, false),
            'title' => $this->faker->name,
            'blog_slug' => $this->createSlug($this->model, $this->faker->name, 'blog_slug')
        ];
    }
}
