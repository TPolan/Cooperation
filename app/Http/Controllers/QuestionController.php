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
        $view->questions = $query;
        return $view;
    }

    public function show($id)
    {
        // \App\Answer::where($id)->get();
        
    $query = Question::find($id);
    $view = view('questions\show');
    $view->question = $query;
    return $view;

    }
}
