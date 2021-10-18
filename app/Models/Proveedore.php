<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'telefono',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/proveedores/'.$this->getKey());
    }
}
