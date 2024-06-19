<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;

    protected $table = 'tipo_usuarios';
    protected $primaryKey = 'id_tipo';

    protected $fillable = [
        'nombre_tipo',
        'Roles_id_rol',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'Roles_id_rol');
    }

    public function usuarios()
    {
        return $this->hasMany(User::class, 'id_tipo');
    }
}

