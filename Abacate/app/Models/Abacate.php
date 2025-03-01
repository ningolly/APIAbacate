<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abacate extends Model
{
    protected $fillable = [
        'TipoAbacate',
        'DtVld',
        'Distribuidora',
        'Quantidade',
    ];
}
