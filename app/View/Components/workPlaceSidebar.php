<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class workPlaceSidebar extends Component
{
    public $style;
    public $rota;
    public $conteudo;
    public $cargo;
    public function __construct($cargo,$style,$rota,$conteudo)
    {
        $this->style = $style;
        $this->cargo = $cargo;
        $this->rota = $rota;
        $this->conteudo = $conteudo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render($cargo): View|Closure|string
    {
        return view('components.work-place-sidebar');
    }
}
