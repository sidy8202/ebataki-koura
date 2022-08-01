<?php

namespace App\Http\Controllers;
use App\Models\departements;
use App\Models\utilisateurs;

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
        return view('departementsmodal')->with('service',$service);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function create()
    {
       
        return view('departementsmodal');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departements = Departements::findOrFail($id);
        return view('show', compact('departements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departements = Departements::findOrFail($id);

        return view('edit', compact('departements'));
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
        $validatedData = $request->validate([
            'nom' => 'required',
            ]);
    
        Departements::whereId($id)->update($validatedData);
    
        return redirect('/departements')->with('success', 'MISE A JOUR REUSSIE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departement = Departements::findOrFail($id);
        $departement->delete();
    
        return redirect('/departements')->with('success', 'SUPPRESSION  REUSSIE');
    }
}
