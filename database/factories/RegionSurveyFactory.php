<?php

namespace Database\Factories;

use App\Models\Region;
use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RegionSurveysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "region_id" => fake()->randomElement(Region::all()->pluck("id")),
            "survey_id" => fake()->randomElement(Survey::all()->pluck("id")),
        ];
    }
}
