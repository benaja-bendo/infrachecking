<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EntrepriseController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::all();
        return view('pages.entreprise', [
            'entreprises' => $entreprises,
        ]);
    }

    public function edit($id)
    {
        $entreprise = Entreprise::where('id', $id)->first();
        return view('pages.entrepriseEdit', [
            'entreprise' => $entreprise
        ]);
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());
//        $inputs = $request->all();
//        Validator::make($inputs, [
//            'nom' => ['required', 'string', 'min:2'],
//            'telephone' =>['required','string'],
//            'adresse' =>['required','string'],
//            'email' => ['required', 'string', 'email'],
//            'logo' => ['image', 'max:5000'],
//        ])->validate();
        $validated = $request->validate([
            'nom' => 'required|string|min:2',
            'telephone' => 'required|string',
        ]);

    }
}
