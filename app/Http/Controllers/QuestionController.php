<?php

namespace App\Http\Controllers;

use App\Question;
use App\Course;
use App\Chapter;
use App\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\QuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $courses = Course::select('id', 'name')->get();
        // $chapters = Chapter::all();
        // return view('question.index', compact('courses', 'chapters'));
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
    public function store(QuestionRequest $request)
    {
        DB::beginTransaction();
        try {

            $question = new Question();
            $question->text = $request->text;
            $question->chapter_id = $request->chapter_id;
            $question->save();

            $options = array(
                array(
                    'answer' => $request->option_one,
                    'is_correct' => $request->is_correct == 1 ? 1 : null,
                    'question_id' => $question->id
                ),
                array(
                    'answer' => $request->option_two,
                    'is_correct' => $request->is_correct == 2 ? 1 : null,
                    'question_id' => $question->id
                ),
                array(
                    'answer' => $request->option_three,
                    'is_correct' => $request->is_correct == 3 ? 1 : null,
                    'question_id' => $question->id
                ),
                array(
                    'answer' => $request->option_four,
                    'is_correct' => $request->is_correct == 4 ? 1 : null,
                    'question_id' => $question->id
                ),
            );
            Option::insert($options);
            DB::commit();
            $request->session()->flash('success', 'New Question has been added.');
        } catch (Exception $e) {
            DB::rollback();
            $request->session()->flash('error', 'An error occured.');
        }

        return redirect()->route('chapter.show', $request->chapter_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        session()->flash('success', 'Question has been Removed.');
        return redirect()->back();
    }
}
