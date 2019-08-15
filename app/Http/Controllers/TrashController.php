<?php

namespace App\Http\Controllers;

use App\Course;
use App\Chapter;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index()
    {
        $heading = 'Trash Box';
    	$courses = Course::select('id', 'name')->orderBy('deleted_at', 'desc')->onlyTrashed()->get();
        $chapters = Chapter::with('course')->orderBy('deleted_at', 'desc')->onlyTrashed()->get();

        return view('trash.index', compact([
          'heading',
          'courses',
          'chapters'
      ]));
    }
}
