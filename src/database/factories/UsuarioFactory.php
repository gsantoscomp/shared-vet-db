<?php

namespace Gsantoscomp\VetDb\Factories;

use Faker\Factory;
use Gsantoscomp\VetDb\Models\Usuario;
use Illuminate\Database\Eloquent\Model;
use Gsantoscomp\VetDb\Models\Empresa;
use Gsantoscomp\VetDb\Models\Pessoa;

class UsuarioFactory
{
    public function create(array $attributes = [])
    {
        $faker = Factory::create('pt_BR');

        $entidadeControlador = $faker->boolean;
        $entidadeClass = $entidadeControlador ? Empresa::class : Pessoa::class;

        $entidade = $entidadeControlador ? (new EmpresaFactory())->create() : (new PessoaFactory())->create();

        $tipoUsuario = (new TipoUsuarioFactory())->create()->first();

        $attributes = array_merge([
            'email' => $faker->email,
            'password' => $faker->password,
            'entidade_id' => $entidade->id,
            'entidade_tipo' => $entidadeClass,
            'tipo_usuario_id' => $tipoUsuario->id,
        ], $attributes);

        return Usuario::create($attributes);
    }
}