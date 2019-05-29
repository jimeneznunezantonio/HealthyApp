<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['name', 'surname1','surname2','nuhsa','BornDate','weight','height','dni','telephone','email','password','Address','zipCode','passport','nationality','nie'];


    #public function citas()
    #{
    #    return $this->hasMany('App\Cita');
    #}


    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }
    //
}
