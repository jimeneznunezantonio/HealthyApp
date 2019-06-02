<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['name', 'surname1','surname2','nuhsa','BornDate','weight','height','dni','telephone','email','password','Address','zipCode','passport','nationality','nie'];


    public function pacientes()
    {
        return $this->hasMany('App\Tratamiento');
    }
    public function enfermedades()
    {
        return $this->hasMany('App\Enfermedad');
    }


    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }

    public function medicamentos()
    {
        return $this->hasMany('App\Medicamento');
    }
    //
}
