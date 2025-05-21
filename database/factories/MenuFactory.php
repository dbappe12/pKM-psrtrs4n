<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'id_menu_induk' => 0
            'type' => 'tree',
            'title'=>'Master Aplikasi',
            'url'=>'#',
            'icon'=>'fas fa-user-shield',
            'active'=>'["admin\\/user","admin\\/role","admin\\/permission","admin\\/setting","admin\\/menu","admin\\/slider"]',
        
        ];
    }
}
