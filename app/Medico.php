<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{

    protected $fillable = ['especialidad'];




    public function especialidad()
    {
        return $this->hasMany('App\Especialidad');
    }
    //
    //
}
