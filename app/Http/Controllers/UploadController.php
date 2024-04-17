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
}