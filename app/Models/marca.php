<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
