<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function pago(){
        return $this->belongsTo(Pago::class);

    }
    public function envio(){
        return $this->belongsTo(Envio::class);
    }
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function detalle_pedido(){
        return $this->hasMany(Detalle_pedido::class);
    }
}
