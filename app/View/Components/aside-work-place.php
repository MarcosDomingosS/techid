<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class aside-work-place extends Component
{
    /**
     * Create a new component instance.
     */

    public $request;

    public function __construct($request = '')
    {
        $this->request = $request;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.aside-work-place');
    }
}
