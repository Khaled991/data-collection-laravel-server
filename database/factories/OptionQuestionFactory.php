<?php

namespace Database\Factories;

use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OptionQuestion>
 */
class OptionQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $is_other_option_enabled = fake()->boolean;
        return [
            "survey_id" => fake()->randomElement(Survey::all()->pluck("id")),
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
            'question_type' => fake()->randomElement(['choose', 'multiple']),
            'is_other_option_enabled' => $is_other_option_enabled,
            'is_other_option_text_enabled' => $is_other_option_enabled ? fake()->boolean : false,
        ];
    }
}
