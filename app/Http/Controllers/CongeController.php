<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('conge.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conge.create');
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
            'date de congé'=>'required',
            'type de congé'=>'required'
        ]);

        $conge = new Conge([
            'date de conge' => $request->get('date de conge'),
            'type de conge' => $request->get('type de conge'),
      
        ]);
        $conge->save();
        return redirect('/conge')->with('success', 'conge a été enregistré!');
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
        return view('conge.edit');
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
            'date de conge'=>'required',
            'type de conge'=>'required'
        ]);

         $conge= Congé::find($id);
         $conge->date_de_congé=  $request->get('date de conge');
         $conge->type_de_congé = $request->get('type de conge');
         $conge->save();

        return redirect('/conge')->with('success', 'conge a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conge = Conge::find($id);
        $conge->delete();

        return redirect('/conge')->with('success', 'conge a été supprimé!');
    }
}
