<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function maketest(){
        return view('frontend.test');
    }

    public function results(){
        return view('frontend.results');
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
