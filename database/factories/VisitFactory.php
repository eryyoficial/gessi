<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visit>
 */
class VisitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'resident_id' => \App\Models\Resident::factory(),
            'visitor_name' => $this->faker->name,
            'visit_date' => $this->faker->date,
            'visit_time' => $this->faker->time,
        ];
    }
}
