<?php

namespace Gsantoscomp\SharedVetDb\Factories;

use Faker\Factory;
use Gsantoscomp\SharedVetDb\Models\Empresa;

class EmpresaFactory
{
    public function create(array $attributes = [])
    {
        $faker = Factory::create('pt_BR');

        $attributes = array_merge([
            'cnpj' => $faker->numerify('###########'),
            'razao_social' => $faker->company,
            'nome_fantasia' => $faker->company,
            'logradouro' => $faker->streetName,
            'bairro' => $faker->city,
            'cidade' => $faker->city,
            'uf' => $faker->stateAbbr,
            'cep' => $faker->numerify('########'),
            'telefone' => $faker->numerify('###########'),
            'numero' => $faker->buildingNumber,
            'complemento' => $faker->secondaryAddress,
        ], $attributes);

        return Empresa::create($attributes);
    }
}
