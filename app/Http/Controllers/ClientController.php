<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function liste(){
        $clients = Clients::all();
        return view('proprietaire', compact('clients'));
    }

    public function store(request $request){
        // dd('ici');
        $clients = new Clients();
        $clients->lastname = $request->input('lastname');
        $clients->firstname = $request->input('firstname');
        $clients->email = $request->input('email');
        $clients->adress = $request->input('adress');
        $clients->work = $request->work;
        $clients->save();
        return back()->with('success','Proprietaire ajouter avec success');
    }
    public function edit($id){
        $client = Client::findOrFail($id);
        return back();
    }
    
    public function update(Request $request,$id){
        
        $clients = Clients::findOrFail($id);
        $clients->lastname = $request->input('lastname');
        $clients->firstname = $request->input('firstname');
        $clients->email = $request->input('email');
        $clients->adress = $request->input('adress');
        $clients->work = $request->work;
        $clients->save();
        return back()->with('success','Proprietaire modifié');
    }

    public function destroy($id){
        Clients::find($id)->delete();
        return back()->with('success','Proprietaire supprimer');;
    }
   
}
