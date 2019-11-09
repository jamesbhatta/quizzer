<?php

namespace App\Http\Controllers;

use App\Content;
use App\Course;
use App\Chapter;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contents = Content::all();
        // $chapters = Chapter::select('id','title')->get();
        // $courses = Course::select('id','name')->get();
        // return view('content.index', compact('contents', 'chapters', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($chapter_id = null)
    {
        $chapter = Chapter::findOrFail($chapter_id);
        return view('content.create', compact('chapter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = new Content();
        $content->chapter_id = $request->chapter_id;
        $content->content = $request->content;
        $content->excerpt = $request->excerpt;
        $content->save();

        $request->session()->flash('success', 'Content has been saved!');
        return redirect()->route('chapter.show', $request->chapter_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        $chapter = Chapter::findOrFail($content->chapter_id);
        return view('content.edit', compact('chapter', 'content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $content->content = $request->content;
        $content->excerpt = $request->excerpt;
        $content->save();

        $request->session()->flash('success', 'Content has been saved!');
        return redirect()->route('chapter.show', $request->chapter_id);
    }

}
