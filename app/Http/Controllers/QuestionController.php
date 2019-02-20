<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    public function index()
    {
        $query = DB::table('questions')->orderBy('created_at', 'asc')->get();
        dd($query);
    }

    public function show()
    {
        $query = DB::table('answers')->where('question_id', '=', '1')->get();
        
        $query = DB::table('questions')->where('id', '=', '1')->get();
        dd($query);
    }
}
