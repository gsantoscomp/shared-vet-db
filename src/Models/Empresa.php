<?php

namespace Gsantoscomp\SharedVetDb\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $fillable = [
        'cnpj', 'razao_social', 'nome_fantasia', 'cep', 'logradouro', 'bairro', 'cidade', 'uf', 'telefone', 'numero', 'complemento'
    ];

    public function usuario()
    {
        return $this->morphOne('Gsantoscomp\SharedVetDb\Models\Usuario', 'entidade', 'entidade_tipo');
    }
}
