<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Voiture;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index(){
        $clients = Clients::all();
        $voitures = Voiture::all();
        return view('immatriculé', compact('clients', 'voitures'));
    }
    private function generatePlateNumber(){
        return Str::upper(Str::random(2)).random_int(1000, 9999);
    }

    public function store(request $request){
        $voiture = new Voiture();
        $voiture->client_id = $request->owner;
        $voiture->title = $request->input('title');
        $voiture->marque = $request->input('marque');
        $voiture->matricule = $this->generatePlateNumber();
        $voiture->save();
        return back();
    }
}
