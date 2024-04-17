<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function showResults()
    {
        $userId = Auth::id(); 
        $result = Result::where('user_id', $userId)->first();

        if (!$result) {
            return view('frontend.no-results');
        }
        
        return view('frontend.results', compact('result'));
    }
}