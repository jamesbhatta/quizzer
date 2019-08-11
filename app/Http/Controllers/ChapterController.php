<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests\ChapterRequest;

class ChapterController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapters = Chapter::with('course')->orderBy('id', 'desc')->get();
        $courses = Course::select(['id', 'name'])->get();

        return view('chapter.index', compact(['chapters', 'courses']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChapterRequest $request)
    {
        $chapter = new Chapter();
        $chapter->title = $request->title;
        $chapter->weight = $request->weight;
        $chapter->course_id = $request->course_id;
        $chapter->save();

        $request->session()->flash('success', 'Chapter Added Successfully!');
        return redirect()->route('chapter.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    // public function show(Chapter $chapter)
    public function show($id)
    {
        $chapter = Chapter::with('course')->findOrFail($id);
        $questions = $chapter->questions()->with('options')->orderBy('id', 'desc')->paginate(4);
        return view('chapter.show', compact('chapter', 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(ChapterRequest $request, Chapter $chapter)
    {
        $chapter->title = $request->title;
        $chapter->weight = $request->weight;
        $chapter->course_id = $request->course_id;
        $chapter->save();

        $request->session()->flash('success', 'Chapter Updated Successfully!');
        return redirect()->route('chapter.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $chapter)
    {
        //
    }
}
