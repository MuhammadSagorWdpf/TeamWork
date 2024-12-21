<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cms>
 */
class CmsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'page' => $this->faker->word, // Random page name
            'section' => $this->faker->word, // Random section name
            'images' => $this->faker->imageUrl(), // Random image URL
            'url' => $this->faker->url, // Random URL
            'title' => $this->faker->sentence, // Random sentence for title
            'sub_title' => $this->faker->sentence, // Random subtitle
            'description' => $this->faker->paragraphs(3, true), // Random paragraph for description
            'short_description' => $this->faker->sentence, // Random short description
            'icon' => $this->faker->randomElement(['icon-star', 'icon-heart', 'icon-check']), // Random icon
            'date' => $this->faker->date, // Random date
            'question' => $this->faker->sentence, // Random question
            'answer' => $this->faker->paragraph, // Random answer
            'btn_text' => $this->faker->word, // Random button text
            'status' => $this->faker->randomElement([0, 1]), // Random status (0 or 1)
        ];
    }
}
