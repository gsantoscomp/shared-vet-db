<?php

namespace Gsantoscomp\VetDb\Factories;

use Gsantoscomp\VetDb\Models\TipoUsuario;

class TipoUsuarioFactory
{
    public function create()
    {
        return TipoUsuario::createMany([
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