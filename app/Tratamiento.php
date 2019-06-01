<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    //
    protected $fillable = ['start_date', 'end_date'];



    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
        return $this->hasMany('App\Medicamento');
    }

    public function medicamento()
    {

        return $this->hasMany('App\Medicamento');
    }
}
