<?php


namespace App\Utils;



class Rupiah
{
      public static function clean($rupiah){
            $output = preg_replace( '/[^-0-9]/', '', $rupiah);
            return $output;
      }
}
