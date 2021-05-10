<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paie.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paie.create');
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
            'codeP'=>'required',
            'prix heure'=>'required'
        ]);

        $paie = new Paie([
            'codeP' => $request->get('codeP'),
            'nombre de jour' => $request->get('nombre de jour'),
            'prix heure' => $request->get('prix heure'),
            'regime' => $request->get('regime'),
            'salaire de base' => $request->get('salaire de base'),
            'salaire net' => $request->get('salaire net'),
            'retener cnss' => $request->get('retener cnss'),
            'les heures suplementaires' => $request->get('les heures suplementaires'),
            'les intéréts bancaires' => $request->get('les intéréts bancaires'),
            'primes' => $request->get('primes'),            
      
        ]);
        $paie->save();
        return redirect('/paie')->with('success', 'paie a été enregistré!');
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
        return view('paie.edit');
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
            'codeP'=>'required',
            'prix heure'=>'required'
        ]);

         $paie = Paie::find($id);
         $paie->codeP=  $request->get('codeP');
         $paie->nombre_de_jour = $request->get('nombre de jour');
         $paie->prix_heure = $request->get('prix_heure');
         $paie->regime = $request->get('regime');
         $paie->salaire_de_base = $request->get('salaire de base');
         $paie->salaire_net = $request->get('salaire net');
         $paie->retener_cnss = $request->get('retener_cnss');
         $paie->les_heurs_suplementaires = $request->get('les heurs suplementaires');
         $paie->les_intéréts_bancaires = $request->get('les intéréts bancaires');
         $paie->primes = $request->get('primes');
         $paie->save();

        return redirect('/paie')->with('success', 'paie a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paie =Paie::find($id);
        $paie->delete();

        return redirect('/paie')->with('success', 'paie a été supprimé!');
    }
}
