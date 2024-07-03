<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CategoriaForm extends Form
{
    #[Rule('required')]
    public $nombre,$descripcion;
}
