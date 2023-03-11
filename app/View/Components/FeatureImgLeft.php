<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeatureImgLeft extends Component
{

    public $bgimg;
    public $title;
    public $subtitle;

    /**
     * Create a new component instance.
     */
    public function __construct($bgimg, $title, $subtitle)
    {
        $this->bgimg = $bgimg;
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.feature-img-left');
    }
}
