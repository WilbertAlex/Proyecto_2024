<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function productos(){
        return $this->hasMany(Producto::class);

    }
    public function anillos()
    {
        return $this->hasMany(Anillo::class);
    }

}
