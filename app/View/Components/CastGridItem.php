<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CastGridItem extends Component
{
    public $cast;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cast)
    {
        $this->cast = $cast;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cast-grid-item',['cast'=>$this->cast]);
    }
}
