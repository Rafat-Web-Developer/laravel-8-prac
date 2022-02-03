<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Test extends Component
{
    public $details;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($information)
    {
        $this->details = $information;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test');
    }
}
