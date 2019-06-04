<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trat_Med extends Model
{
    protected $fillable = ['startMedDate', 'endMedDate','dose','tratamiento_id','medicamento_id'];
    //

    public function medicamento()
    {
        return $this->belongsTo('App\Medicamento');

    }
    public function tratamiento()
    {
        return $this->belongsTo('App\Tratamiento');

    }
}
