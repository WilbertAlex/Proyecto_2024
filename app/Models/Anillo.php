<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anillo extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
