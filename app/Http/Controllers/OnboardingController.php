<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    /**
     * Show the application dashboard.

     * @return \Illuminate\View\View
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function lessontest()
    {
        return view('test.lessontest');
    }
    public function resexemple()
    {
        return view('test.resexemple');
    }
    public function resexemple2()
    {
        return view('test.resexemple2');
    }
    public function resexemple3()
    {
        return view('test.resexemple3');
    }
    public function general()
    {
        return view('general');
    }
    public function part()
    {
        return view('part');
    }
    public function demo()
    {
        return view('demo');
    }
    public function about()
    {
        return view('about');
    }
}
