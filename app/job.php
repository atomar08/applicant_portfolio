<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    //
    public function applicants()
    {
        return $this->belongsToMany(\App\applicant::class);
        //hasOne(App\Cart::class);
    }

    public function job()
  {
      return $this->hasMany('App\jobs');
  }
   
}
