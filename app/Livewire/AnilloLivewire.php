<?php

namespace App\Livewire;

use App\Models\Anillo;
use App\Models\categoria;
use Livewire\Component;

class AnilloLivewire extends Component
{
    public function render()
    {   $anillos=Anillo::latest('id')->paginate(9);
        return view('livewire.anillo-livewire',compact('anillos'));
    }
}
