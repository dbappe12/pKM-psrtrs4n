<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[ [
            'judul'       => 'tabligh akbar',
            'foto'     => 'main-slider-1-3.jpg'],
            [
                'judul'       => 'kantor bupati',
                'foto'     => 'kantor_bupati.jpg'
                ]
            ];
            foreach($data as $row){
                Slider::create($row);
            }
    }
}
