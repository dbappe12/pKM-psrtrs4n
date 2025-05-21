<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            
            'name'      => 'superadmin',
            'username'      => 'superadmin',
            'email'     => 'superadmin@superadmin.com',
            'password'  => bcrypt('superadmin'),
            'last_login_at'  => '2023 -12 -20 16: 08: 02',
            'last_login_ip'=>'127.0.0.1'
        ]);
        $superadmin->assignRole('superadmin');

        $admin = User::create([
            
            'name'      => 'admin',
            'username'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin'),
            'last_login_at'  => '2023 -12 -20 16: 08: 02',
            'last_login_ip'=>'127.0.0.1'
        ]);
        $admin->assignRole('admin');

        $operator = User::create([
            'name'=> 'operator',
            'username'      => 'operator',
            'email'     => 'operator@operator.com',
            'password'  => bcrypt('operator'),
            'last_login_at'  => '2023 -12 -20 16: 08: 02',
            'last_login_ip'=>'127.0.0.1'
        ]);
        $operator->assignRole('operator');
    }
}
