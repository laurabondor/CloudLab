<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class FormController extends Controller
{

    public function showForm()
    {
        $formData = request()->cookie('form_data') ?? [];

        return view('frontend.test')->with('formData', $formData);
    }

    public function storeInCookieFirstPage(Request $request)
    {
        $response = new Response('Formularul a fost trimis cu succes!');

        $response->cookie('name', $request->input('name'));
        $response->cookie('age', $request->input('age'));
        $response->cookie('sex', $request->input('sex'));

        for ($i = 1; $i <= 60; $i++) {
            $response->cookie("rating_$i", $request->input("rating_$i"));
        }

        return $response;
    }

    public function storeInCookieSecondPage(Request $request)
    {
        $response = new Response('Formularul a fost trimis cu succes!');

        for ($i = 61; $i <= 120; $i++) {
            $response->cookie("rating_$i", $request->input("rating_$i"));
        }

        return $response;
    }


    public function submitForm(Request $request)
    {
       // Submit
    }
}

