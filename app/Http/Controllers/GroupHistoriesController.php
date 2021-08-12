<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marker;

class GroupHistoriesController extends Controller
{
    public function __invoke(Marker $marker){
    	$histories = $marker->histories()->where('status', 1)->paginate(15);
   
    	return view('site.group_content', ['histories'=>$histories, 'title'=>"Истории с хеш-тегом $marker->label"]);
    }
}
