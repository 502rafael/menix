<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = [
        'id_persona',
        'id_cliente',
        'no_factura',
        'creado_en',
    
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
        return url('/admin/facturas/'.$this->getKey());
    }
}
