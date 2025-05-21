<?php

namespace Database\Seeders;

use App\Models\VideoKegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data= [
            [
                'judul' => 'Contoh 1',
                'link' => 'link',
                'foto'=>'02.jpg'
            ],[
                
                'judul' => 'Contoh 2',
                'link' => 'link',
                'foto'=>'01.jpg'
            ],[
                
                'judul' => 'Contoh 3',
                'link' => 'link',
                'foto'=>'contoh.jpg'
                
            ]
            ];
        foreach($data as $row){
            VideoKegiatan::create($row);
        }
    }
}
