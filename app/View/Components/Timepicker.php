<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Timepicker extends Component
{
   public function __construct(
      public string $id,
      public string $label,
      public string $name = "",
   ) {
   }

    public function render()
    {
      if ($this->name == "") {
         $this->name = $this->id;
      }
        return view('components.timepicker');
    }
}
