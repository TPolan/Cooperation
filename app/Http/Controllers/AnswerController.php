<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
class AnswerController extends Controller
{
    public function show($id)
    {
        $answer = Answer::find($id);
        
        return view('answers/show', compact('answer'));
    }
    public function vote()
    {
    $request = request(); //saving the current request
    
    $answer = Answer::find(1); //eloquent query looking for answer by id
    
    $vote = new \App\Vote; //creating new object vote 
    $vote->answer_id = $answer->id; //creating new object vote 
    
    if ($request->input('up')) {
        $vote->vote = 1;
        $answer->rating++; 
    } elseif($request->input('down')) {
        $vote->vote = -1;
        $answer->rating--; 
    }
    
    $vote->save();
    $answer->save();
    
    return back();
    }
}
