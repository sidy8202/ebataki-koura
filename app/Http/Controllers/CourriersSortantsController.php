<?php

namespace App\Http\Controllers;

use App\Models\courriers_sortants;
use App\Models\courriers_entrants;
use App\Models\utilisateurs;
use Illuminate\Http\Request;

class CourriersSortantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crst = courriers_sortants::all();
        return view('courriersmodalsortants', compact('crst'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'num_reference' => 'required',
            'objet' => 'required',
            'destinateur' => 'required',
            'id_utilisateurs' => 'required',
            'id_courriers_sortants' => 'required'
        ]);
    
        // $crst = crs::create($validatedData);
        // return redirect('/crs')->with('success', 'crs ajouter avec succèss!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\courriers_sortants  $courriers_sortants
     * @return \Illuminate\Http\Response
     */
    public function show(courriers_sortants $courriers_sortants)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\courriers_sortants  $courriers_sortants
     * @return \Illuminate\Http\Response
     */
    public function edit(courriers_sortants $courriers_sortants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\courriers_sortants  $courriers_sortants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courriers_sortants $courriers_sortants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\courriers_sortants  $courriers_sortants
     * @return \Illuminate\Http\Response
     */
    public function destroy(courriers_sortants $courriers_sortants)
    {
        //
    }
}
