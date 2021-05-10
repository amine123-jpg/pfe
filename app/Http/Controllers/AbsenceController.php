<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    return view('absence.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absence.create');
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
            'cause absence'=>'required',
            'date absence'=>'required',
        ]);
        $absence = new Absence([
            'cause absence' => $request->get('cause absence'),
            'date absence' => $request->get('date absence'),
        ]);
        $absence->save();
        return redirect('/absence')->with('success','absence a été enregistr!');
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
        return view('absence.edit');
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
            'cause absence'=>'required',
            'date absence'=>'required'
        ]);

         $absence = Absence::find($id);
         $absence->cause_absence=  $request->get('cause absence');
         $absence->date_absence = $request->get('date absence');
         $absence->save();

        return redirect('/absence')->with('success', 'absence a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absence = Absence::find($id);
        $absence->delete();

        return redirect('/absences')->with('success', 'absence a été supprimé!');
    }
}
