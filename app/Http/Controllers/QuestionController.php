<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Question;

class QuestionController extends Controller
{
    public function index()
    {


       
        $query =  Question::orderBy('created_at', 'asc')->get();
        $view = view('questions/index');
        $view->content = $query;
        return $view;
    }

    public function show()
    {
        \App\Answer::where('question_id', '=', '1')->get();
        
    $query = Question::where('id', '=', '1')->get();
        dd($query);
    }
}
