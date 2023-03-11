<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageFeaturesImgLeft extends Component
{

    public $id;
    public $img;
    public $alt;
    public $title;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $id = null,
        $img = null, 
        $alt = null, 
        $title = null)
    {
        $this->id = $id;
        $this->img = $img;
        $this->alt = $alt;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-features-img-left');
    }
}
