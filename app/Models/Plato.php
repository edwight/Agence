<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    public function categoria(){
    	return $this->belongsTo('App\Models\Category');
    }
    public function users(){
    	return $this->belongsToMany('App\Models\User');
    }
    public function imgs(){
    	return $this->hasMany('App\Models\Img');
    }
}
