<?php

namespace Gsantoscomp\SharedVetDb\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'client_id',
        'animal_id',
        'initial_date',
        'final_date',
        'description'
    ];

    public function client()
    {
        return $this->belongsTo('Gsantoscomp\SharedVetDb\Models\Client', 'client_id');
    }

    public function animal()
    {
        return $this->belongsTo('Gsantoscomp\SharedVetDb\Models\Animal', 'animal_id');
    }
}
