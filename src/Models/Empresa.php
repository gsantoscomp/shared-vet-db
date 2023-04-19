<?php

namespace Gsantoscomp\VetDb\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'cnpj', 'razao_social', 'nome_fantasia', 'cep', 'logradouro', 'bairro', 'telefone', 'numero', 'complemento',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->morphOne('Gsantoscomp\VetDb\Models\Usuario', 'entidade', 'entidade_tipo');
    }
}
