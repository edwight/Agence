<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public $timestamps = false;
	protected $table = 'categorias';
    public function platos(){
    	return $this->hasMany('App\Models\Plato','categoria_id');
    }
}
