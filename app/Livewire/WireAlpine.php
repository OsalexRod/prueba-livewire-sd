<?php

namespace App\Livewire;

use Livewire\Component;

class WireAlpine extends Component
{
    public $contador = 0;

    public function render()
    {
        return view('livewire.wire-alpine');
    }

    public function incrementarContador() {
        $this->contador++;
    }
}
