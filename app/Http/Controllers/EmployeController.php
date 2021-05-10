<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('employe.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('employe.create');
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
            'codeE'=>'required',
            'fonction'=>'required'
        ]);

        $employe = new Employe([
            'codeE' => $request->get('codeE'),
            'fonction' => $request->get('fonction'),
            'salaire proposer' => $request->get('salaire proposer'),
            'date dembouche' => $request->get('date dembouche'),
            
      
        ]);
        $employe->save();
        return redirect('/employe')->with('success', 'employe a été enregistré!');
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
        return view ('employe.edit');
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
            'codeE'=>'required',
            'fonction'=>'required'
        ]);

         $employe = Employe::find($id);
         $employe->codeE=  $request->get('codeE');
         $employe->fonction = $request->get('fonction');
         $employe->salaire_proposer = $request->get('salaire_proposer');
         $employe->date_dembouche = $request->get('date_dembouche');
         $employe->save();

        return redirect('/employe')->with('success', 'employe a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe = Employe::find($id);
        $employe->delete();

        return redirect('/employe')->with('success', 'employe a été supprimé!');
    }
}
