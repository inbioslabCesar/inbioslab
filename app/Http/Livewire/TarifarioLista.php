<?php

namespace App\Http\Livewire;

use App\Models\Examen;
use Livewire\Component;

class TarifarioLista extends Component
{
    public function render()
    {
        return view('livewire.tarifario-lista', [
            'tarifarios' => Examen::all()
        ]);
    }
}
