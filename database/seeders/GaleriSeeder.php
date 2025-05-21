<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'judul' => 'Tabligh Akbar 4',
                'foto' => 'tablig_akbar4.jpg',
            ],[
                
                'judul' => 'tablig akbar',
                'foto' => 'tablig_akbar1.jpg',
            ]
            ];
        foreach($data as $row){
            Galeri::create($row);
        }
    }
}
