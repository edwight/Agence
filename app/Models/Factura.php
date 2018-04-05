<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'cao_fatura';
    //protected $primaryKey = 'co_fatura';
    public $timestamps = false;
    public function servicio()
    {
        return $this->belongsTo('App\Models\Servicio','co_os','co_os');
    }
    //public function ser()
}
