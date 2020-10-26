<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    public function users(){
        return $this->hasMany('App\User');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }
}
