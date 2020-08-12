<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieSection extends Component
{
    public $name;
    public $margin;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = 'Movie Section',$margin = 'mt-8')
    {
        $this->name = $name;
        $this->margin = $margin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.movie-section',[
            'name'=>$this->name,
            'margin'=>$this->margin
        ]);
    }
}
