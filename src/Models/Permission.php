<?php

namespace Gsantoscomp\SharedVetDb\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'module',
        'page',
        'name',
        'user_type_id'
    ];

    public function userType()
    {
        return $this->belongsTo('Gsantoscomp\SharedVetDb\Models\UserType','user_type_id');
    }
}
