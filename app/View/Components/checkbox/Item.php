<?php

namespace App\View\Components\checkbox;

use Illuminate\View\Component;

class Item extends Component
{
   public function __construct(
      public string $id,
      public string $text,
      public string $name = "",
      public string $color = "",
   ) {
   }

 
    public function render()
    {
      if ($this->name == "") {
         $this->name = $this->id;
      }

      if($this->color != ""){
         $this->color = 'icheck-'.$this->color;
      }else{
         $this->color = 'icheck-secondary';
      }
        return view('components.checkbox.item');
    }
}
