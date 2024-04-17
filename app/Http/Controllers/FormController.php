<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\DataProcessor;

class FormController extends Controller
{
    protected $dataProcessor;

    public function __construct(DataProcessor $dataProcessor)
    {
        $this->dataProcessor = $dataProcessor;
    }

    public function submitTest(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'sex' => 'required|in:masculin,feminin',
        ]);

        $data = $request->all();

        $results = $this->dataProcessor->evaluate($data);

        $user = Auth::user();
        $resultModel = new Result([
            'user_id' => $user->id,
        ]);

        foreach ($results as $result) {
            foreach ($result as $trait => $value) {
                $resultModel->{$trait} = $value;
            }
        }

        $resultModel->save();

        return redirect('/results')->with('success', 'Rezultatele au fost obtinute cu succes!');
    }
}
