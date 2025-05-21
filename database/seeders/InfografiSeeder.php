<?php

namespace Database\Seeders;

use App\Models\Infografis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfografiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'judul' => 'Contoh 1',
                'gambar' => 'contoh.jpg',
                'file'=>'file.pdf'
            ],[
                
                'judul' => 'Contoh 2',
                'gambar' => 'contoh.jpg',
                'file'=>'file.pdf'
            ]
            ];
        foreach($data as $row){
            Infografis::create($row);
        }
    }
}
