<?php

namespace Database\Factories;

use App\Enums\Page;
use App\Enums\Section;
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
            'page' => $this->faker->randomElement(Page::cases())->value,
            'section' => $this->faker->randomElement(Section::cases())->value,
            'images' => $this->faker->imageUrl(),
            'url' => $this->faker->url,
            'title' => $this->faker->sentence,
            'sub_title' => $this->faker->sentence,
            'sub_title_2' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'short_description' => $this->faker->sentence,
            'icon' => $this->faker->word,
            'date' => $this->faker->date,
            'question' => $this->faker->word,
            'answer' => $this->faker->sentence,
            'btn_text' => $this->faker->word,
            'status' => $this->faker->randomElement([0, 1]), // Assuming 0 or 1 for status
            'card_title_1' => $this->faker->word,
            'card_title_2' => $this->faker->word,
            'card_title_3' => $this->faker->word,
            'card_title_4' => $this->faker->word,
            'card_title_5' => $this->faker->word,
            'card_title_6' => $this->faker->word,
            'card_title_7' => $this->faker->word,
            'card_title_8' => $this->faker->word,
            'card_title_9' => $this->faker->word,
            'card_title_10' => $this->faker->word,
            'card_desc_1' => $this->faker->paragraph,
            'card_desc_2' => $this->faker->paragraph,
            'card_desc_3' => $this->faker->paragraph,
            'card_desc_4' => $this->faker->paragraph,
            'card_desc_5' => $this->faker->paragraph,
            'card_desc_6' => $this->faker->paragraph,
            'card_desc_7' => $this->faker->paragraph,
            'card_desc_8' => $this->faker->paragraph,
            'card_desc_9' => $this->faker->paragraph,
            'card_desc_10' => $this->faker->paragraph,
        ];

    }
}
