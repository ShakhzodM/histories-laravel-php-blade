<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoriesController extends Controller
{

	public function __construct(){
		
	}
    public function __invoke($name){
    	return route('adm.abc');
    }

    public function a(){
    	return 'a';
    }

    public function b(){
    	return 'b';
    }
}
