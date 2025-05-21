<?php

namespace Database\Seeders;

use App\Models\WebsiteSkpd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteSkpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data= [
            ['judul' => 'judul1',
            'opd' => 'opd1',
            'keterangan' => 'keterangan1',
            'foto' => 'ppid.jpg',
        'link' => 'https://ppid.batangharikab.go.id/'],
        ['judul' => 'judul1',
        'opd' => 'opd2',
        'keterangan' => 'keterangan2',
        'foto' => 'bkd.jpg',
        'link' => 'https://bkd.batangharikab.go.id/']
    ];
        foreach($data as $skpd){
            WebsiteSkpd::create($skpd);
        }
    }
}
