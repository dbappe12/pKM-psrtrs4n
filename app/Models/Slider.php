<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    //  use AutoUUID;
     protected $table = 'sliders';
     protected $guarded = [];
 
     protected $casts = [
      'created_at'     => 'date:d-m-Y H:m:s',
      'updated_at'     => 'date:d-m-Y H:m:s',
   ];



}
