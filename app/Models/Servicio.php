<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'cao_os';
    //protected $primaryKey = 'co_os';
    public $timestamps = false;
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura');
    }
    public function usuario()
    {
        return $this->hasMany('App\User','co_usuario','co_usuario');
    }

}
