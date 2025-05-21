<?php

namespace Database\Seeders;

use App\Models\Anggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data= [
            [
                'judul' => 'It has survived not only five centuries, but also the leap into
                electronic typesetting simply fee text aunchanged. It was popularised in
                the sheets containing lorem ipsum is simply free text',
                'link_download' => 'url',
            ],   [
                'judul' => 'Dokumen 1',
                'link_download' => 'url',
            ]
        ];
        foreach($data as $anggaran){
            Anggaran::create($anggaran);
        }
    }
}
