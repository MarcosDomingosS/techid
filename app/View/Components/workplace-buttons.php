<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class workPlaceButtons extends Component
{
    public $img;
    public $url;
    public $nome;
    public $classe;
    /**
     * Create a new component instance.
     */
    public function __construct($img = '', $url = '', $nome = '', $classe = '')
    {
        $this->classe = $classe;
        $this->img = $img;
        $this->url = $url;
        $this->nome = $nome;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.workplace-buttons');
    }
}
