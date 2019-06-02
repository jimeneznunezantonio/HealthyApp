<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = ['name', 'presentation','pharmCompany'];

    public function tratamiento()
    {
        return $this->belongsTo('App\Tratamiento');
    }

    //no falta tb que pertenece a un paciente?
    public function tratamientos()
    {
        return $this->hasMany('App\Tratamiento');
    }
}
