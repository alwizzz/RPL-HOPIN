<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laporan>
 */
class LaporanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->randomElement([
            'Pohon Tumbang',
            'Kecelakaan Becak',
            'Serangan Ular',
            '6 Buronan Pemerintah',
            'Narapidana  Kabur',
            'Ormas Grebek Holytight'
        ]);
        return [
            'user_id' => $this->faker->numberBetween(1, User::all()->count()),
            'title' => $title,
            'description' => $this->faker->paragraphs($this->faker->numberBetween(2, 5), true),
            'images' => 'blank',
            'urgency_type' => $this->faker->randomElement(['Genting', 'Tidak genting']),
            'location' => $this->faker->randomElement(['Karanganyar', 'Surakarta', 'Sragen'])
        ];
    }
}
