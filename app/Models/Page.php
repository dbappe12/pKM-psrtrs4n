<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

use Vinkla\Hashids\Facades\Hashids;
class Page extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    //  use AutoUUID;
     protected $table = 'pages';
     protected $guarded = [];

     protected $appends = [];
     protected $casts = [
       
       
        'created_at'     => 'date:d-m-Y H:m:s',
        'updated_at'     => 'date:d-m-Y H:m:s',
       
        
    ];

    public function getIdAttribute()
    {
 
    // $hashids = new Hashids();
     return Hashids::encode($this->attributes['id']);
     // return   $hashids->encode($this->attributes['id']);
           
         
       
    }
    
}
