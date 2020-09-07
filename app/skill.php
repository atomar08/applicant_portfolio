<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    //
    public function applicants()
    {
    return $this->belongsToMany(\App\applicant::class);
    }


    public function skill()
    {
        return $this->hasMany('App\skills');
    }      
}
