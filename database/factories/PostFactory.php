<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;



    public function definition()
    {
        $post = New Post;
        $title = fake()->text($maxNbChars = 60, $indexSize = 2);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => fake()->realTextBetween($minNbChars = 160, $maxNbChars = 1000, $indexSize = 2),
            'notes' => fake()->paragraph($minNbChars = 30, $maxNbChars = 90, $indexSize = 2),
            'image' => fake()->imageUrl(),
            'active' => fake()->boolean(),
            'featured' => fake()->boolean(),
            'user_id' =>  User::all()->random()->id,
        ];
    }
}
