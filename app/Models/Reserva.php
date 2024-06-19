<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $primaryKey = 'id_reservas';

    protected $fillable = [
        'id_usuario',
        'id_habitacion',
        'Fecha_inicio_reserva',
        'Fecha_final_reserva',
        'Estado_reserva',
        'dias_reserva',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'id_habitacion');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_reserva');
    }
}

