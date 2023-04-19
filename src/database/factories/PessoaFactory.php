<?php

namespace Gsantoscomp\VetDb\Factories;

use Faker\Factory;
use Gsantoscomp\VetDb\Models\Pessoa;

class PessoaFactory
{
    public function create(array $attributes = [])
    {
        $faker = Factory::create('pt_BR');

        $attributes =  array_merge([
            'nome' => $faker->name,
            'cpf' => $faker->cpf,
            'cep' => $faker->cep,
            'logradouro' => $faker->streetName,
            'bairro' => $faker->cityPrefix,
            'cidade' => $faker->city,
            'uf' => $faker->stateAbbr,
            'telefone' => $faker->phoneNumber,
            'numero' => $faker->buildingNumber,
            'complemento' => $faker->secondaryAddress,
        ], $attributes);

        return Pessoa::create($attributes);
    }
}