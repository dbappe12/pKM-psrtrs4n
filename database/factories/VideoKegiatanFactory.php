<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VideoKegiatan>
 */
class VideoKegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'judul' => 'tablig akbar 4',
            'link' => 'url',
            'foto' => 'tablig_akbar4.jpg',
        ];
    }
}
