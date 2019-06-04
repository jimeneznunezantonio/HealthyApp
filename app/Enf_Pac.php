<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enf_Pac extends Model
{
    protected $fillable = ['enf_startDate','enf_endDate', 'paciente_id', 'enfermedad_id'];
    //

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function enfermedad()
    {
        return $this->belongsTo('App\Enfermedad');
    }
}
