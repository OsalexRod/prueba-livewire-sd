<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Cliente;

class ClienteController extends Component
{
    use WithPagination;

    //variables para la vista
    public $nombre = '';
    public $cantidaDeItemsPorPagina = 10;
    
    //variables para el form
    public $nombre2;
    public $ci;
    public $telefono;

    public function render()
    {
        $vectorDeClientes = Cliente::where("nombre", "like", '%'.$this->nombre.'%')->paginate($this->cantidaDeItemsPorPagina);
        return view('livewire.cliente-index', [
            'vectorDeClientes' => $vectorDeClientes
        ]);
    }

    public function guardar() {
        Cliente::create([
            'nombre' => $this->nombre2,
            'ci' => intval($this->ci),
            'telefono' => intval($this->telefono),
        ]);
        print("guardado!!!");
    }
}
