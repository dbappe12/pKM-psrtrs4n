<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;


use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
class Menu extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    //  use AutoUUID;
     protected $table = 'menu';
     protected $guarded = [];

     protected $appends = ['hakakses','aktif','items','submenu'];
     protected $casts = [
       
       
        'created_at'     => 'date:d-m-Y H:m:s',
        'updated_at'     => 'date:d-m-Y H:m:s',
       
        
    ];
    // public function getUrlAttribute(){
        
    //   //   return url("admin/".$this->attributes['url']);
    
    // }


    public function getItemsAttribute(){
        $items = DB::table('menu')
                    ->where('id_menu_induk',$this->attributes['id'])
                    ->get();
                    $explode_id = json_decode($items,true);
                     return $explode_id;
    
    }

    public function getSubMenuAttribute(){
        return DB::table('menu')
                    ->where('id_menu_induk',$this->attributes['id'])
                    ->count();
    
    }


    public function getRoleAttribute(){
        // // $items = DB::table('menu')
        // //             ->whereIn('permission',$this->attributes['permission'])
        // //             ->get();
        //            // $explode_id = json_decode($items,true);
        //              return $this->attributes['permission'];
        $desiredValues = json_decode($this->attributes['id_permission']);

         $results = Role::whereIn('id', $desiredValues)->pluck('name');
         return  json_decode($results,true);
    
    }
    public function getAktifAttribute(){
        // // $items = DB::table('menu')
        // //             ->whereIn('permission',$this->attributes['permission'])
        // //             ->get();
        //            // $explode_id = json_decode($items,true);
        //              return $this->attributes['permission'];
        $desiredValues = json_decode($this->attributes['id_permission']);
        $items = DB::table('menu')
        ->where('type', 'menu')
        ->where('id_menu_induk', $this->attributes['id'])
        ->pluck('active');
        

        // $results = Role::whereIn('id', $desiredValues)->pluck('name');
         return  $items;   
    }

    public function getHakAksesAttribute(){
       
         return json_decode($this->attributes['permission'],true);
    }

  


}
