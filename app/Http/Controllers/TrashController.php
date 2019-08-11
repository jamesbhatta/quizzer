<?php

namespace App\Http\Controllers;

use App\Course;
use App\Chapter;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index()
    {
    	$courses = Course::select('id', 'name')->orderBy('deleted_at', 'desc')->onlyTrashed()->get();
    	$chapters = Chapter::select('id', 'title')->orderBy('deleted_at', 'desc')->onlyTrashed()->get();

    	$heading = 'Trash Box';
    	return view('trash.index', compact([
    		'heading',
    		'courses',
    		'chapters'
    	]));
    }
}
