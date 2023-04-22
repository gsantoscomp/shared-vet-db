<?php

namespace Gsantoscomp\SharedVetDb\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'tipos_usuario';

    protected $fillable = [
        'nome', 'descricao'
    ];

    public function usuarios()
    {
        return $this->hasMany('Gsantoscomp\SharedVetDb\Models\Usuario', 'tipo_usuario_id', 'id');
    }
}
