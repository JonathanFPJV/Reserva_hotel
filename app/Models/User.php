<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'apellidos',
        'email',
        'telefono',
        'direccion',
        'fecha_registro',
        'estado_usuario',
        'fecha_inicio',
        'id_tipo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'id_tipo');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_usuario');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'id_usuario');
    }
}
