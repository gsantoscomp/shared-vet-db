<?php

namespace Gsantoscomp\SharedVetDb\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'users_types';

    protected $fillable = [
        'type',
        'description'
    ];

    public function users()
    {
        return $this->hasMany('Gsantoscomp\SharedVetDb\Models\User');
    }

    public function permissions()
    {
        return $this->hasMany('Gsantoscomp\SharedVetDb\Models\Permission');
    }
}
