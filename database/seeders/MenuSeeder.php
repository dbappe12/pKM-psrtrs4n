<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([ 'id_menu_induk' => 0,
        'type' => 'tree',
        'title'=>'Master Aplikasi',
        'url'=>'#',
        'icon'=>'fas fa-user-shield',
        'active'=>'["admin\\/user","admin\\/role","admin\\/permission","admin\\/setting","admin\\/menu","admin\\/slider"]',
    ]);
    }
}
