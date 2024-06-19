<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';
    protected $primaryKey = 'idComentarios';

    protected $fillable = [
        'id_usuario',
        'id_habitacion',
        'calificacion',
        'Comentario',
        'fecha_subida',
        'fecha_actualizacion',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'id_habitacion');
    }
}

