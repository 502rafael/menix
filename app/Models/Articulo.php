<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
        'id_categoria',
        'codigo',
        'nombre',
        'precio_compra',
        'precio_venta',
        'stock',
        'descripcion',
        'estado',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/articulos/'.$this->getKey());
    }
}
