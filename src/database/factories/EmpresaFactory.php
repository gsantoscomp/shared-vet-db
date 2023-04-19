<?php

namespace Gsantoscomp\VetDb\Factories;

use Faker\Factory;
use Gsantoscomp\VetDb\Models\Empresa;

class EmpresaFactory
{
    public function create(array $attributes = [])
    {
        $faker = Factory::create('pt_BR');

        $attributes = array_merge([
            'cnpj' => $faker->cnpj,
            'razao_social' => $faker->company,
            'nome_fantasia' => $faker->company,
            'logradouro' => $faker->streetName,
            'bairro' => $faker->city,
            'cidade' => $faker->city,
            'uf' => $faker->stateAbbr,
            'cep' => $faker->postcode,
            'telefone' => $faker->phoneNumber,
            'numero' => $faker->buildingNumber,
            'complemento' => $faker->secondaryAddress,
        ], $attributes);

        return Empresa::create($attributes);
    }
}