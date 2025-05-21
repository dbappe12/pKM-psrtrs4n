<?php

namespace App\View\Components\checkbox;

use Illuminate\View\Component;

class CheckBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $label="")
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.checkbox.check-box');
    }
}
