<?php

namespace Gsantoscomp\SharedVetDb\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

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

    public function appointment()
    {
        return $this->belongsTo('Gsantoscomp\SharedVetDb\Models\Appointment','appointment_id');
    }

    public function animals()
    {
        return $this->hasMany('Gsantoscomp\SharedVetDb\Models\Animal');
    }
}
