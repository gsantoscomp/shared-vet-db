<?php

namespace Gsantoscomp\SharedVetDb\Factories;

use Faker\Factory;
use Gsantoscomp\SharedVetDb\Models\TipoUsuario;
use Gsantoscomp\SharedVetDb\Models\Usuario;
use Gsantoscomp\SharedVetDb\Models\Empresa;
use Gsantoscomp\SharedVetDb\Models\Pessoa;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory
{
    public function create(array $attributes = [])
    {
        $faker = Factory::create('pt_BR');

        $entidadeControlador = $faker->boolean;
        $entidadeClass = $entidadeControlador ? Empresa::class : Pessoa::class;

        $entidade = $entidadeControlador ? (new EmpresaFactory())->create() : (new PessoaFactory())->create();

        if (TipoUsuario::first() == null) {
            (new TipoUsuarioFactory())->create();
        }

        $tipoUsuario = TipoUsuario::first();

        $attributes = array_merge([
            'email' => $faker->email,
            'senha' => Hash::make('123456'),
            'entidade_id' => $entidade->id,
            'entidade_tipo' => $entidadeClass,
            'tipo_usuario_id' => $tipoUsuario->id,
        ], $attributes);

        return Usuario::create($attributes);
    }
}
