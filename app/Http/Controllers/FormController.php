<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function submitForm(Request $request)
    {
    $data = [
        $request->input('name'),
        $request->input('age'),
        $request->input('sex'),
    ];

    foreach ($questions as $question) {
        $data[] = $request->input('rating_' . $question->id);
    }

    $file = fopen(storage_path('app/data.csv'), 'a');
    fputcsv($file, $data);
    fclose($file);

    return redirect()->back()->with('success', 'Formularul a fost trimis cu succes!');
    }
}

