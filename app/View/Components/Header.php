<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $welcome;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($welcome)
    {
        $this->welcome = $welcome;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
