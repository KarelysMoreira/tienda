<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\categorias1;

class Categorias extends Component
{
    public function render()
    {
        $categorias=categorias1::all();
        return view('livewire.categorias',['categorias'=>$categorias]);
    }
}
