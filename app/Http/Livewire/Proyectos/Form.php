<?php

namespace App\Http\Livewire\Proyectos;

use Livewire\Component;

class Form extends Component
{
    public $show = true, $componentName, $selected_id;

    public $listebers = ['show' => 'show'];

    public function show()
    {

        $this->show = true;
    }


    public function render()
    {

        return view('livewire.proyectos.form');
    }

    public function update()
    {
        //
    }
}
