<?php

namespace Gsantoscomp\VetDb\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome', 'cpf', 'cep', 'logradouro', 'bairro', 'cidade', 'uf', 'telefone', 'numero', 'complemento', 'usuario_id'
    ];

    public function usuario()
    {
        return $this->morphOne('Gsantoscomp\VetDb\Models\Usuario', 'entidade', 'entidade_tipo');
    }
}
