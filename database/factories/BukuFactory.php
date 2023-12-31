<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul'=>fake()->words(2,true),
            'penulis'=>fake()->name(),
            'harga'=> fake()->numerify('###000'),
            'tgl_terbit'=>fake()->date('Y-m-d')
        ];
    }
}