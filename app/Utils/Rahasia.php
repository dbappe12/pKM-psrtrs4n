<?php

namespace App\Utils;



trait Rahasia
{
   public static function encrypt($messagePayload)
   {
       try {
           $AES_256_CBC = 'aes-128-cbc';
           $encryption_key = env('ENCRYPT_KEY');
           $iv  ='1��+0��';
           $encrypted = openssl_encrypt($messagePayload, $AES_256_CBC, $encryption_key, 0, $iv);
           $encrypted = $encrypted . ':' . base64_encode($iv);
       } catch (Exception $e) {}
       return $encrypted;


   }

   /**
    * Decrypt a message
    *
    * @param string $encryptedPayload - message encrypted with encrypt()
    * @return string
    */
   public static  function decrypt($encryptedPayload)
   {
       try {
           $AES_256_CBC = 'aes-128-cbc';
           $parts = explode(':', $encryptedPayload);
           $encryption_key = env('ENCRYPT_KEY');
           $decrypted = openssl_decrypt($parts[0], $AES_256_CBC, $encryption_key, 0, base64_decode($parts[1]));
           return $decrypted;
       } catch (Exception $e) {}

   }
}
