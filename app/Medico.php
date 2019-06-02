<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //
    protected $fillable = ['name', 'surname', 'especialidad_id'];


    public function especialidad()
    {
        return $this->belongsTo('App\Especialidad');
    }

    public function tratamientos()
    {
        return $this->hasMany('App\Tratamiento');
    }


    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }
}
