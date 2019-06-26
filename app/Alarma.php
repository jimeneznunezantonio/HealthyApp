<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alarma extends Model
{
    protected $fillable = ['date_hour'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //
}
