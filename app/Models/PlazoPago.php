<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlazoPago extends Model
{
    use HasFactory;

    protected $table = 'plazo_pagos';
    protected $primaryKey = 'idPlazo_pago';

    protected $fillable = [
        'fecha_registro',
        'fecha_final',
    ];

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_plazos');
    }
}

