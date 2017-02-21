<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    protected $table="comercios";
    protected $fillable=['name','disponible','latitude','longitude','horario']; //campos que queremos mostrar

    //singular porque solo puede tener una categoria
    public function tipoComercio(){
    	return $this->belongsTo('App\TipoComercio');

    }
}
