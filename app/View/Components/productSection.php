<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class productSection extends Component
{
    public string $nome;
    public string $valor;
    public string $path;
    public string $unidades;
    /**
     * Create a new component instance.
     */
    public function __construct($nome = "", $valor = "",$path = "",$unidades = "")
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->path = $path;
        $this->unidades = $unidades;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-section');
    }
}
