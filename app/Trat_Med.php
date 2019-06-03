<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trat_Med extends Model
{
    protected $fillable = ['startMedDate', 'endMedDate','dose','tratamiento_id','medicamento_id'];
    //

    public function medicamento()
    {
        return $this->hasMany('App\Medicamento');

    }
    public function tratamiento()
    {
        return $this->hasMany('App\Tratamiento');

    }
}
