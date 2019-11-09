<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon; 
use App\Http\Requests\SettingRequest;

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

        $joinedUsers = DB::table('users')->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))->groupBy('date')->get();
        // return $joinedUsers;
        return view('dashboard', compact('courseCount', 'chapterCount', 'questionCount', 'userCount', 'joinedUsers'));
    }

    public function settings()
    {
        $settings = Setting::first();
        if (! $settings) {
            $settings = new Setting();
        }
        return view('settings', compact('settings'));
    }

    public function saveSettings(SettingRequest $request)
    {
        $settings = Setting::first();
        if (! $settings) {
            $settings = new Setting();
        }
        $settings->app_name = $request->app_name;
        $settings->marks_per_question = $request->marks_per_question;
        $settings->negative_mark_per_question = $request->negative_mark_per_question;
        $settings->exam_duration = $request->exam_duration * 60;
        $settings->save();

        $request->session()->flash('success', 'New settings applied!');
        return redirect()->route('settings');
    }
}
