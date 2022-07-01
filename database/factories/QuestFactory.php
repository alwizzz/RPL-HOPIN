<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quest>
 */
class QuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, User::all()->count()),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraphs($this->faker->numberBetween(2, 5), true),
            'images' => 'blank',
            'reward_items' => $this->faker->randomElement(['Uang', 'Barang', 'Uang & Barang']),
            'reward_exp' => $this->faker->numberBetween(1, 10) * 100,
            'location' => $this->faker->randomElement(['Karanganyar', 'Surakarta', 'Sragen'])
        ];
    }
}
