<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    //
    protected $fillable = ['name','start_date', 'end_date', 'medico_id', 'paciente_id','medicamento_id'];



    public function paciente()
    {
        return $this->belongsTo('App\Paciente');

    }
    public function medico()
    {
        return $this->belongsTo('App\Medico');

    }

    public function medicamento()
    {

        return $this->belongsTo('App\Medicamento');
    }
    public function trat_med()
    {

        return $this->hasMany('App\Trat_Med');
    }

}
