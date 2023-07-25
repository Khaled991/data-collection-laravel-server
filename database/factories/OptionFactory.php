<?php

namespace Database\Factories;

use App\Models\OptionQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text' => fake()->sentence,
            'option_question_id' => fake()->randomElement(OptionQuestion::all()->pluck("id")),
            'is_textfield_enabled' => fake()->boolean,
        ];
    }
}
