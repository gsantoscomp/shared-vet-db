<?php

namespace Gsantoscomp\SharedVetDb\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'tipos_usuario';

    protected $fillable = [
        'tipo_usuario', 'detalhes'
    ];

    public function usuarios()
    {
        return $this->hasMany('Gsantoscomp\VetDb\Models\Usuario', 'tipo_usuario_id', 'id');
    }
}
