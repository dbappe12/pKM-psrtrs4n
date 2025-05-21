<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Pegawai extends Model
{
    use HasFactory;
    //  use AutoUUID;
     protected $table = 'pegawai';
     protected $guarded = [];
 
     protected $casts = [
      'created_at'     => 'date:d-m-Y H:m:s',
      'updated_at'     => 'date:d-m-Y H:m:s',
      'tanggal_lahir' => 'date:d-m-Y',
   ];


   public function setTanggalLahirAttribute($value)
   {
      $this->attributes['tanggal_lahir'] =  Carbon::parse($value)->translatedFormat('Y-m-d');
   }
}
