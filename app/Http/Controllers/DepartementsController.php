<?php

namespace App\Http\Controllers;

use App\Models\departements;
use Illuminate\Http\Request;

class DepartementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = departements::all();
        return view('departementsmodal')->with('service',$service);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $structure = $request->validate([
            'nom' => 'required',
            ]);

        departements::create($structure);
        return redirect('/departements')->with('success', 'Departement ajouté avec Succes!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function show(departements $departements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departements = departements::findOrFail($id);

    return view('edit', compact('departements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
        ]);

        departements::whereId($id)->update($validatedData);
    
        return redirect('/departements')->with('success', 'MISE A JOUR REUSSIE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $departements = departements::findOrFail($id);
        $departements->delete();
    
        return redirect('/departements')->with('success', 'SUPPRIMER  REUSSIE');
    }
}
