<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function voire(){
        $voiture = Voiture::with('voiture')->get();
        return view('immatriculé', compact('voiture'));
    }
    public function store(request $request){
        $voiture = new Voiture();
        $voiture->title = $request->input('title');
        $voiture->owner = $request->input('owner');
        $voiture->marque = $request->input('marque');
        $voiture->matricule = $request->input('matricule');
        $voiture->save();
        return back();
    }
}
