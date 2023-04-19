<?php

namespace Gsantoscomp\VetDb\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'email', 'senha', 'entidade_tipo', 'entidade_id', 'tipo_usuario_id'
    ];

    public function entidade()
    {
        return $this->morphTo();
    }

    public function tipoUsuario()
    {
        return $this->belongsTo('Gsantoscomp\VetDb\Models\TipoUsuario', 'tipo_usuario_id', 'id');
    }
}
