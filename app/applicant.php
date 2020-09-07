<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
    //
    public function job()
    {
        return $this->hasOne(\App\job::class);
    }

    public function applicant()
    {
        return $this->hasMany('App\applicants');
    }
   
}
