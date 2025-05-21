<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            MenuSeeder::class,
            VideoKegiatanSeeder::class,
            SliderSeeder::class,
            GaleriSeeder::class,
            SettingSeeder::class,
            BeritaSeeder::class,
            PageSeeder::class,
            WebsiteSkpdSeeder::class,
            InfografiSeeder::class,
            StatistikPengunjungSeeder::class,
            AnggaranSeeder::class
        ]);
    }
}
