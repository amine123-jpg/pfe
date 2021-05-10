<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pointage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pointage.create');
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
        ]);

        $pointage = new Pointage([
            'codeP' => $request->get('codeP'),
            'date entre' => $request->get('date entre'),
            'date sortie' => $request->get('date sortie'),
            'heure entre' => $request->get('heure entre'),
            'heure sortie' => $request->get('heure sortie'),
            
      
        ]);
        $pointage->save();
        return redirect('/pointage')->with('success', 'le pointage a été enregistré!');
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
        return view('pointage.edit');
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
            
        ]);

         $pointage = Pointage::find($id);
         $pointage->codeP=  $request->get('codeP');
         $pointage->date_entre = $request->get('date entre');
         $pointage->date_sortie = $request->get('date_sortie');
         $pointage->heure_entre = $request->get('heure entre');
         $pointage->heure_sortie = $request->get('heure sortie');
         $pointage->save();

        return redirect('/pointage')->with('success', 'le pointage a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pointage = Pointage::find($id);
        $pointage->delete();

        return redirect('/pointage')->with('success', 'le pointage a été supprimé!');
    }
}
