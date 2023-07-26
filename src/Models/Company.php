<?php

namespace Gsantoscomp\SharedVetDb\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'cnpj'
    ];

    public function clients()
    {
        return $this->hasMany('Gsantoscomp\SharedVetDb\Models\Client');
    }


    public function users()
    {
        return $this->hasMany('Gsantoscomp\SharedVetDb\Models\User');
    }


}
