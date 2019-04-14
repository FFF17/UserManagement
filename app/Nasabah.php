<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    public function user(){ 
        return $this->belongsToMany('App\User');
    }

}
