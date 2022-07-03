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
        $title = $this->faker->randomElement([
            'Bantu Membersihkan Halaman',
            'Dibutuhkan pemain figuran',
            'Dicari mini figure hilang',
            'Membantu menanam padi',
            'Memberi makan komodo',
            'Menguras septic tank'
        ]);
        return [
            'user_id' => $this->faker->numberBetween(1, User::all()->count()),
            'title' => $title,
            'description' => $this->faker->paragraphs($this->faker->numberBetween(2, 5), true),
            'images' => 'blank',
            'reward_items' => $this->faker->randomElement(['Uang', 'Barang', 'Uang & Barang']),
            'reward_exp' => $this->faker->numberBetween(1, 10) * 100,
            'location' => $this->faker->randomElement(['Karanganyar', 'Surakarta', 'Sragen'])
        ];
    }
}
