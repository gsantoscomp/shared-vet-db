<?php

namespace Gsantoscomp\SharedVetDb\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Usuario extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'email', 'senha', 'entidade_tipo', 'entidade_id', 'tipo_usuario_id'
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function entidade()
    {
        return $this->morphTo();
    }

    public function tipoUsuario()
    {
        return $this->belongsTo('Gsantoscomp\SharedVetDb\Models\TipoUsuario', 'tipo_usuario_id', 'id');
    }
}
