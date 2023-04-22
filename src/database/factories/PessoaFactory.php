<?php

namespace Gsantoscomp\SharedVetDb\Factories;

use Faker\Factory;
use Gsantoscomp\SharedVetDb\Models\Pessoa;

class PessoaFactory
{
    public function create(array $attributes = [])
    {
        $faker = Factory::create('pt_BR');

        $attributes =  array_merge([
            'nome' => $faker->name,
            'cpf' => $faker->numerify('###########'),
            'cep' => $faker->numerify('########'),
            'logradouro' => $faker->streetName,
            'bairro' => $faker->cityPrefix,
            'cidade' => $faker->city,
            'uf' => $faker->stateAbbr,
            'telefone' => $faker->numerify('###########'),
            'numero' => $faker->buildingNumber,
            'complemento' => $faker->secondaryAddress,
        ], $attributes);

//        dd($attributes);
        return Pessoa::create($attributes);
    }
}
