<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/chart', function(){
	$result = DB::table('chapters')
	->select(DB::raw('count(id) as weight'),DB::raw('date(created_at) as created_at'))
	->groupBy('created_at')
	->orderBy('created_at','asc')
	->get();

	return response()->json($result);
});

Route::get('/dashboard/chartsecond', function(){
	$result = DB::table('chapters')
	->select(DB::raw('count(id) as weight'), DB::raw('date(created_at) as created_at'))
	->groupBy('created_at')
	->orderBy('created_at','asc')
	->get();
	$result = $result->groupBy(function($date = 'created_at'){
		return Carbon\Carbon::parse($date->created_at)->format('D');
	});

	$items = array();
	// $count = 1;
	foreach ($result as $key => $item) {
		foreach ($item as $i) {
			$string = $i->created_at;
		}
		$items[$key] = count($item);
		// $count++;
	}
	return $items;
	// return response()->json($result);
});


// Route::get('/dashboard', function() { 
// 	return view('layouts.app'); 
// })->name('dashboard');

// Route::get('/dashboard/{any}', function() { 
// 	return view('layouts.app'); 
// })->where('any', '(.*)');


Route::prefix('dashboard')->middleware('auth')->group(function () {
	Route::resource('course', 'CourseController');
	Route::resource('chapter', 'ChapterController');
	Route::resource('questions', 'QuestionController');
	Route::get('trash', 'TrashController@index')->name('trash');
});
