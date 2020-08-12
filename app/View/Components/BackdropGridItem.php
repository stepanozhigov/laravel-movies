<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BackdropGridItem extends Component
{
    public $backdrop;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($backdrop)
    {
        $this->backdrop = $backdrop;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.backdrop-grid-item',['backdrop'=>$this->backdrop]);
    }
}
