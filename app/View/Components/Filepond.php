<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Filepond extends Component
{
   public function __construct(
      public string $id,
      public string $label,
      public string $info = "",
      public string $name="",
   ) {
   }


   /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\Contracts\View\View|\Closure|string
    */
   public function render()
   {
      if ($this->name == "") {
         $this->name = $this->id;
      }
      return view('components.filepond');
   }
}
