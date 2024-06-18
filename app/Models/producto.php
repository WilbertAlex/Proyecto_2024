<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);

    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }
    public function inventario(){
        return $this->belongsTo(Inventario::class);

    }
    public function marca(){
        return $this->belongsTo(Marca::class);
    }
}
