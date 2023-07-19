<?php

namespace Gsantoscomp\SharedVetDb\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permission';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'document_type',
        'document',
        'address',
    ];

    public function userType()
    {
        return $this->belongsTo('Gsantoscomp\SharedVetDb\Models\UserType','user_type_id');
    }
}
