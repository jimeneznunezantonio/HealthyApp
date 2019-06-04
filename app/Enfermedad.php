<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $fillable = ['name'];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function enf_pacs()
    {
        return $this->hasMany('App\Enf_Pac');
    }
    //
}

