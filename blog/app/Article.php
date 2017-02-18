<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table="articles";
    protected $fillable=['title','content','category_id','user_id']; //campos que queremos mostrar

    //singular porque solo puede tener una categoria
    public function category(){
    	return $this->belongsTo('App\Category');

    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function images(){

    	return $this->hasMany('App\Image');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }    
}