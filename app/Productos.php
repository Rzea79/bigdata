<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'slug', 'title', 'description', 'nombre', 'descripcion','precio','unidad','stock', 'urlfoto', 'visitas', 'orden', 'subcategorias_id'
    ];

    public function subcategorias(){
        return $this->belongsTo("App\Subcategorias");
    }   


}
