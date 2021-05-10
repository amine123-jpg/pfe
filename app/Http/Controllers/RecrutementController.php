<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecrutementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recrutement.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recrutement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
        ]);

        $recrutement = new Recrutement([
            'cin' => $request->get('cin'),
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'situation familiale' => $request->get('situation familiale'),
            'telephone' => $request->get('telephone'),
            'adresse' => $request->get('adresse'),
            'cv' => $request->get('cv'),
            'nationalité' => $request->get('nationalité'),
            
            
      
        ]);
        $recrutement->save();
        return redirect('/recrutement')->with('success', 'recrutement a été enregistré!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('recrutement.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
        ]);

         $recrutement = Recrutement::find($id);
         $recrutement->cin=  $request->get('cin');
         $recrutement->nom = $request->get('nom');
         $recrutement->prenom = $request->get('prenom');
         $recrutement->situation_familiale = $request->get('situation_familiale');
         $recrutement->telephone = $request->get('telephone');
         $recrutement->adresse = $request->get('adresse');
         $recrutement->cv = $request->get('cv');
         $recrutement->nationalité = $request->get('nationalité');
         $recrutement->save();

        return redirect('/recrutement')->with('success', 'recrutement a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recrutement = Recrutement::find($id);
        $recrutement->delete();

        return redirect('/recrutement')->with('success', 'recrutement a été supprimé!');
    }
}
