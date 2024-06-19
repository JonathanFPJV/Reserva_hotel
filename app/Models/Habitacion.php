<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $table = 'habitaciones';
    protected $primaryKey = 'ID_habitacion';

    protected $fillable = [
        'Numero_habitacion',
        'Tipo_habitacion',
        'Capacidad',
        'Precio',
        'Estado_habitacion',
        'Piso',
    ];

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_habitacion');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'id_habitacion');
    }
}

