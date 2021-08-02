<?php

namespace Database\Factories;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(), //Generates a User from factory and extracts id
            'title' => $this->faker->sentence(), //Generates a fake sentence
            'body' => $this->faker->paragraph(30), //generates fake 30 paragraphs
            'category' => $this->faker->company(),
        ];
    }
    /**
     * Run the following command to generate fake articles (30)
     * (30) users would be generated, each user owns an article each
     * 1. php artisan tinker
     * 2. \App\Models\BlogPost::factory()->times(30)->create();
     */
}
