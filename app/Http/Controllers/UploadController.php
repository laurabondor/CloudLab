<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;

class UploadController extends Controller
{
    public function upload(){
        $questions = Question::all(); 
        return view('frontend.test', compact('questions'));
    }

    public function index()
    {
        $questions = Question::paginate(60); 
        return view('frontend.test', compact('questions'));
    }
}
