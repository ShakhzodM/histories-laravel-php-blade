<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
	protected $fillable = ['email', 'text', 'voites', 'status', 'date_published'];
    public function markers(){
    	return $this->belongsToMany('App\Marker');
    }
}
