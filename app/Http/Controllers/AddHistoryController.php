<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marker;
use Validator;
use App\History;

class AddHistoryController extends Controller
{
    public function __invoke(Request $request){
    	if($request->isMethod('post')){

    		$input = $request->except('_token');
    		$messages = [
    			'required'=>'Поле :attribute не может быть пустым',
    			'email'=>'Поле :attribute не cоотвествует корректному email',
    			'max'=>'В поле :attribute максимальное количество символов :max'
    		];
    		$validator = Validator::make($input, [
    			'email'=>'required|email|max:64',
    			'text'=>'required|max:700',
    			'mark'=>'max:100|required'

    		], $messages);
    		if($validator->fails()){
    			return redirect()->route('add')->withErrors($validator)->withInput();
       		 }
    		$marks = explode('#', $request->mark);
    		unset($marks[0]);
            //dd($marks);
    		foreach($marks as $mark){
    			$m = Marker::firstOrCreate(['label'=>$mark]);
    			$atData[] = $m->id;
    		}
    		$input['date_published'] = date('Y-m-d H:i:s');
    		$input['status'] = 0;
    		$input['voites'] = 0;
   			unset($input['mark']);
       		 $history = new History;
       		 $newHistory = $history->fill($input);
       		 if($history->save()){
    			$newHistory->markers()->attach($atData);
    			return redirect()->route('add')->with('status', 'История отправлена на модерацию');
    		}
    	}
    	if(view()->exists('site.add_content')){
    		return view('site.add_content', ['title'=>'Добавить историю']);
    	}
    	
    	
    }
}
