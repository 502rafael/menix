<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detallefactura extends Model
{
    protected $fillable = [
        'id_factura',
        'id_articulo',
        'cantidad',
        'precio',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/detallefacturas/'.$this->getKey());
    }
}
