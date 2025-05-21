<?php

namespace App\Config;
use App\Models\Menu;
class MenuSidebar
{
   public static function render()
   {
      return  collect([

         [
            'type'   => 'header',
            'title'  => 'App Settings',
            'permission'=> ['superadmin','admin','operator'],
         ],

         [
            'type'   => 'menu',
            'title'  => 'Dashboard',
            'url'    => route('dashboard'),
            'icon'   => 'fas fa-tachometer-alt',
            'active' => ['dashboard'],
            'permission'=> ['superadmin','admin','operator'],
         ],

         [
            'type'   => 'tree',
            'title'  => 'Role Permissions',
            'url'    => '#',
            'icon'   => 'fas fa-user-shield',
            'active' => ['admin/user', 'admin/role', 'admin/permission', 'admin/setting'],
            'permission'=> ['superadmin'],
            'items' => [
               [
                  'type'   => 'menu',
                  'title'  => 'Master User',
                  'url'    => route('user.index'),
                  'icon'   => 'fas fa-user',
                  'active' => ['user.*']
               ],
               [
                  'type'   => 'menu',
                  'title'  => 'Role',
                  'url'    => route('role.index'),
                  'icon'   => 'fas fa-user-cog',
                  'active' => ['role.*']
               ],
         
               [
                  'type'   => 'menu',
                  'title'  => 'Permissions',
                  'url'    => route('permission.index'),
                  'icon'   => 'fas fa-unlock',
                  'active' => ['permission.*']
               ]

            ]
         ],
         [
            'type'   => 'tree',
            'title'  => 'Sample Data',
            'url'    => '#',
            'icon'   => 'fas fa-user-shield',
            'active' => ['form', 'pegawai'],
            'permission'=> ['superadmin','admin','operator'],
            'items' => [
               [
                  'type'   => 'menu',
                  'title'  => 'Form',
                  'url'    => route('form.index'),
                  'icon'   => 'fas fa-user',
                  'active' => ['form.*']
               ],
               [
                  'type'   => 'menu',
                  'title'  => 'Pegawai',
                  'url'    => route('pegawai.index'),
                  'icon'   => 'fas fa-user-cog',
                  'active' => ['pegawai.*']
               ],
         
      

            ]
         ],
         [
            'type'   => 'header',
            'title'  => 'Data Master',
            'permission'=> ['superadmin','admin','operator'],
         ],
         [
            'type'   => 'tree',
            'title'  => 'Master Aolikasi',
            'url'    => '#',
            'icon'   => 'fas fa-user-shield',
            'active' => ['slider', 'pegawai'],
            'permission'=> ['superadmin','admin','operator'],
            'items' => [
               [
                  'type'   => 'menu',
                  'title'  => 'Slider Foto',
                  'url'    => route('slider.index'),
                  'icon'   => 'fas fa-user',
                  'active' => ['slider.*']
               ],
               [
                  'type'   => 'menu',
                  'title'  => 'Pegawai',
                  'url'    => route('pegawai.index'),
                  'icon'   => 'fas fa-user-cog',
                  'active' => ['pegawai.*']
               ],
         
      

            ]
         ],
         
        
      ]);
      // $items = Menu::where('id_menu_induk',0)
      // ->get();
    
      // // $result = json_decode($items, true);
      //  return $items;
   }
}
