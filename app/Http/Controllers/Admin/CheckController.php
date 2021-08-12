<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\History;
use App\Marker;

class CheckController extends Controller
{
    public function __invoke(History $history, Request $request){
    	if($request->isMethod('delete')){
    		$marks = Marker::has('histories',1)->get();
    		foreach($marks as $mark){
    			$marksLabel[] = $mark->label;
    		}
    		foreach($history->markers as $marker){
    				if(in_array($marker->label, $marksLabel)){
    					$marker->delete();
    				}
    		}
    		$history->markers()->detach();
    		$history->delete();
    		return redirect()->route('check')->with('status', 'История удалена');
    	}

    	if($request->isMethod('post')){
    		$history->date_published = date('Y-m-d H:i:s');
    		$history->status = 1;
    		$history->save();
    		return redirect()->route('check')->with('status', 'История добавлена');
    	}

    	$histories = History::where('status', 0)->paginate(15);
    	if(view()->exists('admin.check_histories')){
    		return view('admin.check_histories', ['histories'=>$histories,'title'=>'Админ']);
    	}
    	
    }
}
