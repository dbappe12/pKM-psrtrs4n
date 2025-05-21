<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSkpd extends Model
{
    use HasFactory;
    protected $table = 'website_skpds';
    protected $guarded = ['id'];
   
 
    protected $casts = [
     'created_at'     => 'date:d-m-Y H:m:s',
     'updated_at'     => 'date:d-m-Y H:m:s',
  ];


    

    
    

}
