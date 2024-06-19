<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id_rol';

    protected $fillable = [
        'Nombre_rol',
    ];

    public function tipoUsuarios()
    {
        return $this->hasMany(TipoUsuario::class, 'Roles_id_rol');
    }
}

