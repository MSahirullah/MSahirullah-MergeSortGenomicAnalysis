<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SmsLog>
 */
class SmsLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'requested_system' => $this->faker->word,
            'requested_by' => $this->faker->name,
            'campaign_id' => $this->faker->optional()->numberBetween(1, 1000),
            'contact_no' => $this->faker->phoneNumber,
            'type' => $this->faker->optional()->word,
            'text' => $this->faker->text,
            'is_sent' => $this->faker->boolean(80), // 80% chance of being true
        ];
    }
}
