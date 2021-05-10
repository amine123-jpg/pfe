<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personnel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnel.create');
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
            'matricule'=>'required',
            'cin'=>'required',
        ]);

        $personnel = new Personnel([
            'matricule' => $request->get('matricule'),
            'cin' => $request->get('cin'),
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'telephone' => $request->get('telephone'),
            'poste' => $request->get('poste'),
            'salaire' => $request->get('salaire'),
            'horaire' => $request->get('horaire'),
            
      
        ]);
        $personnel->save();
        return redirect('/personnel')->with('success', 'le personnel a été enregistré!');
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
        return view('personnel.edit');
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
        $personnel = Personnel::find($id);
         $personnel->matricule=  $request->get('matricule');
         $personnel->cin = $request->get('cin');
         $personnel->nom = $request->get('nom');
         $personnel->prenom = $request->get('prenom');
         $personnel->telephone = $request->get('telephone');
         $personnel->poste = $request->get('poste');
         $personnel->salaire = $request->get('salaire');
         $personnel->horaire = $request->get('horaire');
         $personnel->save();

        return redirect('/personnel')->with('success', 'le personnel a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personnel = Personnel::find($id);
        $personnel->delete();

        return redirect('/personnel')->with('success', 'le personnel a été supprimé!');
    }
}
