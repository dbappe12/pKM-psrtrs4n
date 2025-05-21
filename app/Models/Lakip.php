<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lakip extends Model
{
    use  HasFactory ;
    protected $table = 'lakip';
    protected $guarded = [];
   

    protected $casts = [
        'created_at'     => 'date:d-m-Y H:m:s',
        'updated_at'     => 'date:d-m-Y H:m:s',
       
    ];
}
