<?php

namespace App\Http\Livewire;

use App\Models\Proyecto;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class ProyectsIndex extends Component
{

    use WithPagination;


    //protected $paginationTheme = "bootstrap";

    public $selected_id, $componentName, $pageTitle, $search = "",  $pro, $clientes, $users, $mensaje = '';

    public $nombre, $description, $fecha_inicio, $fecha_fin, $cliente_id, $jefe_id, $coordinador_id;

    private $pagination = 6;

    protected $rules = [
        'nombre' => 'required|min:10',
        'description' => 'required|min:10',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required',
        'cliente_id' => 'required',
        'jefe_id' => 'required',
        'coordinador_id' => 'required'

    ];

    public function mount()
    {
        $this->mensaje = '';
        $this->pageTitle = 'Lista de Proyectos';
        $this->componentName = 'Proyectos';
    }
    //  paghinacion con bootstramp
    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        $this->clientes = Supplier::all();
        $this->users = User::all();

        $proyectos = Proyecto::where('name', 'LIKE', '%' . '%' . $this->search . '%')->paginate(5);
        //$proyectos = Proyecto::all()->take(10);

        return view('livewire.proyects-index', compact('proyectos'))
            ->extends('home.master')
            ->section('content');
    }

    public function limpiar_page()
    {

        $this->resetPage();
    }

    public function create()
    {
        $this->nombre = "";
        $this->description  = "";
        $this->fecha_inicio  = "";
        $this->fecha_fin  = "";
        $this->cliente_id  = "";
        $this->jefe_id  = "";
        $this->coordinador_id  = "";
        $this->clientes = null;
        $this->selected_id = 0;
        $this->pro = null;
    }
    public function edit($id)
    {
        $this->selected_id  = $id;

        $this->pro = null;
        if ($id > 0) {
            $this->pro = Proyecto::find($id);
        }
        $this->nombre = $this->pro->name;
        $this->description  = $this->pro->description;
        $this->fecha_inicio  = $this->pro->fecha_inicio;
        $this->fecha_fin  = $this->pro->fecha_fin;
        $this->cliente_id  = $this->pro->cliente_id;
        $this->jefe_id  = $this->pro->jefe_id;
        $this->coordinador_id  = $this->pro->coordinador_id;

        $this->emit('show-modal', 'show modal!');
    }
    public function resetUI()
    {
        $this->modal = 'hide';
        return "Reset";
    }
    public function store(Request $request)
    {

        $this->validate([
            'nombre' => 'required|min:10',
            'description' => 'required|min:10',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'cliente_id' => 'required',
            'jefe_id' => 'required',
            'coordinador_id' => 'required'
        ]);

        $proyecto = Proyecto::create([
            'name' => $this->nombre,
            'description' => $this->description,
            'status' => 1,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'cliente_id' => $this->cliente_id,
            'supplier_id' => $this->cliente_id,
            'jefe_id' => $this->jefe_id,
            'coordinador_id' => $this->coordinador_id

        ]);

        $proyecto->save();

        $this->modal = 'hide';
        $this->emit('hide-modal', 'show modal!');
        $this->mensaje = "Proyecto guardado";
    }
    public function update(Request $request)
    {
        $this->validate([
            'nombre' => 'required|min:10',
            'description' => 'required|min:10',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'cliente_id' => 'required',
            'jefe_id' => 'required',
            'coordinador_id' => 'required'
        ]);

        Proyecto::where('id', '=', $this->selected_id)->update([
            'name' => $this->nombre,
            'description' => $this->description,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'cliente_id' => $this->cliente_id,
            'supplier_id' => $this->cliente_id,
            'jefe_id' => $this->jefe_id,
            'coordinador_id' => $this->coordinador_id
        ]);
        $this->mensaje = "Proyecto Actualizado";
        $this->selected_id = null;
        $this->pro = null;
        $this->emit('hide-modal', 'show modal!');
    }
}
