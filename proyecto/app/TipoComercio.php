<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoComercio extends Model
{
    protected $table="tiposComercio";
    protected $fillable=['name']; //campos que queremos mostrar

    //relaciones, con el nombre de la tabla con la que se va a relacionar
    public function comercios(){
    	return $this->hasMany('App\Comercio');
    }
}
