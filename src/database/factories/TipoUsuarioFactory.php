<?php

namespace Gsantoscomp\SharedVetDb\Factories;

use Gsantoscomp\SharedVetDb\Models\TipoUsuario;

class TipoUsuarioFactory
{
    public function create()
    {
        return TipoUsuario::insert([
            [
                'nome' => 'admin',
                'descricao' => 'Usuário administrador do sistema',
            ],
            [
                'nome' => 'client',
                'descricao' => 'Usuário cliente do sistema',
            ],
        ]);
    }
}
