<?php

namespace App\Http\Controllers;
use App\History;
use Route;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HistoriesController extends Controller
{
    public function updat(){
    	//$user = User::where('id', 1)->first();
    	$histories = History::where('status', 1)->paginate(10);
    	if(view()->exists('site.content')){
    		return view('site.content', ['data'=>$histories, 'title'=>'Все истории']);
    	}
    	abort(404);
    }
}
