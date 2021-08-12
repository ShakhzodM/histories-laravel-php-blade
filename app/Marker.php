<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
	protected $fillable = ['*'];

    public function histories(){
    	return $this->belongsToMany('App\History');
    }
}
