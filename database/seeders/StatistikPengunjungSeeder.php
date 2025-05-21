<?php

namespace Database\Seeders;

use App\Models\StatistikPengunjung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatistikPengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatistikPengunjung::create([ 'dilihat' => 0 ,'hari_ini' => 0,'bulan_ini' => 0  ]);
    }
}
