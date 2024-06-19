<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';
    protected $primaryKey = 'id_pago';

    protected $fillable = [
        'id_reserva',
        'Monto_pago',
        'Metodo_pago',
        'Estado_pago',
        'id_plazos',
    ];

    public function reserva()
    {
        return $this->belongsTo(Reserva::class, 'id_reserva');
    }

    public function plazoPago()
    {
        return $this->belongsTo(PlazoPago::class, 'id_plazos');
    }
}

