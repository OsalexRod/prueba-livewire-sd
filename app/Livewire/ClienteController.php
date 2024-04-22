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
    public $nombreCrear = "";
    public $ciCrear = "";
    public $telefonoCrear = "";

    //variables para el form editar
    public $nombreEditar = "";
    public $ciEditar = "";
    public $telefonoEditar = "";

    public function render()
    {
        $vectorDeClientes = Cliente::where("nombre", "like", '%'.$this->nombre.'%')->paginate($this->cantidaDeItemsPorPagina);
        return view('livewire.cliente-index', [
            'vectorDeClientes' => $vectorDeClientes
        ]);
    }

    public function peresoza($id) {
        if ($id > 0) {
            //editar
            $this->editar();
        } else {
            //crear
            $this->guardar();
        }
    }

    public function guardar() {
        Cliente::create([
            'nombre' => $this->nombreCrear,
            'ci' => intval($this->ciCrear),
            'telefono' => intval($this->telefonoCrear),
        ]);
        $this->reset('nombreCrear', 'ciCrear', 'telefonoCrear');
    }

    public function cargarDatosParaEditar($id) {
        $cliente = Cliente::find($id);
        $this->nombreEditar = $cliente->nombre;
        $this->ciEditar = $cliente->ci;
        $this->telefonoEditar = $cliente->telefono;
    }

    public function editar($id) {
        $cliente = Cliente::find($id);
        $cliente->nombre = $this->nombreEditar;
        $cliente->ci = $this->ciEditar;
        $cliente->telefono = $this->telefonoEditar;
        $cliente->save();
    }

    public function eliminar($id) {
        $cliente = Cliente::find($id);
        $cliente->delete();
    }
}
