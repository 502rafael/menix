<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalledevolucione extends Model
{
    protected $fillable = [
        'id_devolucion',
        'id_factura',
        'id_articulo',
        'cantidad',
        'total',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/detalledevoluciones/'.$this->getKey());
    }
}
