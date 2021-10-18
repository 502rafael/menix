<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'id_persona',
        'id_cliente',
        'tipo_comprobante',
        'serie_comprobante',
        'num_comprobante',
        'creado_en',
        'total',
        'descripcion',
    
    ];
    
    
    protected $dates = [
        'creado_en',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/ventas/'.$this->getKey());
    }
}
