<?php

namespace App\Services;

class UserServices
{
   public function getRoleColor($role)
   {

      // Seed the random number generator to ensure consistent colors for the same input string
      srand(crc32($role));

      // Generate random RGB values based on the characters in the string
      $red = rand(0, 255);
      $green = rand(0, 255);
      $blue = rand(0, 255);

      // Return the RGB values as a hexadecimal color code
      $color = sprintf("#%02x%02x%02x", $red, $green, $blue);
      // return $color;
      // $color = '';
      // switch ($role) {
      //    case 'superadmin':
      //       $color = '#f44336';
      //       break;
      //    case 'inspektur':
      //       $color = '#3f51b5';
      //       break;
      //    case 'admin_inspektorat':
      //       $color = '#009688';
      //       break;
      //    case 'irban':
      //       $color = '#4caf50';
      //       break;
      //    default:
      //       $color = '#4caf50';
      //       break;
      // }

      return '<span style="color: #fff;  opacity: 0.6; background-color:' . $color . '"  class="badge">' . $role . '</span>';
   }
}
