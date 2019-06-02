<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    //
    protected $fillable = ['start_date', 'end_date', 'medico_id', 'paciente_id','medicamento_id'];



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

}
