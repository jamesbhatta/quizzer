<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
	public function getChaptersByCourse($course_id)
	{
		$data = \App\Chapter::select('id', 'title')->where('course_id', $course_id)->get();
		return response()->json([
			'item' => $data->toArray()]
		);
	}
}
