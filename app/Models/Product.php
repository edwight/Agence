<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'platos';
	//protected $fillable = ['title', 'description', 'price', 'availability'];
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