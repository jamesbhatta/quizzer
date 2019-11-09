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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware(['auth', 'admin']);

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

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
	Route::resource('course', 'CourseController');
	Route::resource('chapter', 'ChapterController');
	Route::get('viewcourse/{course_id}', 'ChapterController@index')->name('viewcourse');
	Route::resource('questions', 'QuestionController');
	
	Route::get('content', 'ContentController@index')->name('content.index');
	Route::get('content/create/{chapter_id}', 'ContentController@create')->name('content.create');
	Route::post('content', 'ContentController@store')->name('content.store');
	Route::get('content/{content}/edit', 'ContentController@edit')->name('content.edit');
	Route::post('content/{content}', 'ContentController@update')->name('content.update');
	// Route::resource('content', 'ContentController');
	
	Route::get('settings', 'DashboardController@settings')->name('settings');
	Route::post('settings', 'DashboardController@saveSettings')->name('settings.save');
	Route::get('trash', 'TrashController@index')->name('trash');

	Route::post('course/{id}/untrash', 'CourseController@untrash')->name('course.untrash');
	Route::delete('course/{id}/hard-delete', 'CourseController@hardDelete')->name('course.harddelete');

	Route::post('chapter/{id}/untrash', 'ChapterController@untrash')->name('chapter.untrash');
	Route::delete('chapter/{id}/hard-delete', 'ChapterController@hardDelete')->name('chapter.harddelete');
});
