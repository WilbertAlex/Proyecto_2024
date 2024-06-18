<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function productos(){
        return $this->hasMany(Producto::class);
    }
    public function envios(){
        return $this->hasMany(Envio::class);
    }
    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }

}
