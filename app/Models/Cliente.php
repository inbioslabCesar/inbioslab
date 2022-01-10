<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'referencia',
        'nombre',
        'apellido',
        'edad',
        'sexo',
        'dni',
        'cel',
    ];

    public function scopeBuscarpor($query, $tipo, $buscar)
    {
        if ( ($tipo) && ($buscar) ) {
            return $query->where($tipo, 'like', "%$buscar%");
        }

    }

}
