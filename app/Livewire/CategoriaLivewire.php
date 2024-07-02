<?php

namespace App\Livewire;

use App\Http\Controllers\CategoriaController;
use App\Livewire\Forms\CategoriaForm;
use App\Models\Anillo;
use App\Models\categoria;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;


class CategoriaLivewire extends Component
{
    use WithPagination;
    //use Actions;
    public $isOpen=false;
    //public $position_id;
    public ?categoria $categoria;
    public CategoriaForm $form;
    public $search;

    public function render(){
        $integrantes=categoria::where('nombre','LIKE','%'.$this->search.'%')->latest('id')->paginate(8);
        //$categorias=Category::all();
        //$proveedores=Supplier::all();
        return view('livewire.categoria-livewire',compact('integrantes')); //ejemplo compact('integrantes','cargos'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['categoria']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(categoria $categoria){
        //dd($vehicle);
        $this->categoria=$categoria;
        $this->form->fill($categoria);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if(!isset($this->category->id)){
            Categoria::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $this->categoria->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }
}
