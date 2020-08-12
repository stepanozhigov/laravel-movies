<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PosterGridItem extends Component
{
    public $poster;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($poster)
    {
        $this->poster = $poster;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.poster-grid-item',['cast'=>$this->poster]);
    }
}
