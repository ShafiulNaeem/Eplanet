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
            'user_id' => function () {
                return User::GetActive()->get()->random();
            },
            'post' => $this->faker->text(200),
            'blog_video' => 'https://www.youtube.com/watch?v=' . $this->faker->regexify('[A-Za-z0-9]{11}'),
            'title' => $this->faker->name,
            'blog_slug' => $this->createSlug($this->model, $this->faker->name, 'blog_slug')
        ];
    }
}
