<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courseCount = \App\Course::count();
        $chapterCount = \App\Chapter::count();
        $questionCount = \App\Question::count();
        $userCount = 12;
        return view('dashboard', compact('courseCount', 'chapterCount', 'questionCount', 'userCount'));
    }
}
