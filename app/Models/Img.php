<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
	public $timestamps = false;
    public function plato(){
    	return $this->belongsTo('plato');
    } 
}
