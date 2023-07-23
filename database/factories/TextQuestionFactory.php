<?php

namespace Database\Factories;

use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TextQuestion>
 */
class TextQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "survey_id" => fake()->randomElement(Survey::all()->pluck("id")),
            'title' => fake()->sentence,
            'text' => fake()->sentence,
            'description' => fake()->paragraph,
        ];
    }
}
