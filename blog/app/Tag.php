<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table="tags";
    protected $fillable=['name']; //campos que queremos mostrar

    public function articles(){
    	return $this->belongsToMany('App\Article')->withTimestamps();//->withTimestamps() agregamos esto para evitar posibles errore
    }
}
