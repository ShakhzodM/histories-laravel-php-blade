<?php
use App\History;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\User;


	Route::get('/', ['as'=>'all','uses'=>'HistoriesController@updat']);

	Route::match(['get', 'post'], '/add', ['as'=>'add', 'uses'=>'AddHistoryController']);
	Route::get('/histories/{label}', ['as'=>'group', 'uses'=>'GroupHistoriesController'])->where('label', '[0-9A-Za-z]+');




	Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>'auth'], function(){
		Route::get('/', ['as'=>'admin_add', 'uses'=>'CheckController']);
		Route::get('/all', ['as'=>'admin_all', 'uses'=>'AdminHistoriesController@execute']);
		Route::get('/edit{id}', ['as'=>'admin_edit', 'uses'=>'AdminEditController@execute']);
		Route::match(['get', 'post', 'delete'],'/check/{history?}', ['as'=>'check','uses'=>'CheckController']);
	});
	

	Auth::routes();
	
	Route::get('/home', ['as'=>'home',function(){
		return view('home');
	}]);

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

	Auth::routes();
