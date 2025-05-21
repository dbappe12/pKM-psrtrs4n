<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
 
  
   public function __construct(public string $title, public string $size,public string $id="")
   {
      
   }

  
   public function render()
   {
      return view('components.modal');
   }
}
