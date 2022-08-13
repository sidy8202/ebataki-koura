<?php

namespace App\Http\Controllers\Admin;
use App\Models\courriers_entrants;
use App\Models\secretaire;
use App\Models\utilisateurs;

use App\Http\Controllers\Controller;
use App\Models\secretaires;
use Illuminate\Http\Request;

class CourriersEntrantskouraController extends Controller
{
    public function index()
    {
        $bara = secretaires::all();
        $crst = courriers_entrants::all();
        return view('admin.courriersentrants.indexce', compact('crst','bara'));

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
            'expediteur' => 'required',
            'id_secretaire' => 'required'
            
        ]);
        $crst = courriers_entrants::create($validatedData);
        return redirect('admin/courrierentrandd')->with('success', 'courrier receptionné avec succèss!!!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\courriers_entrants  $courriers_entrants
     * @return \Illuminate\Http\Response
     */
    public function show(courriers_entrants $courriers_entrants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\courriers_entrants  $courriers_entrants
     * @return \Illuminate\Http\Response
     */
    public function edit(courriers_entrants $courriers_entrants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\courriers_entrants  $courriers_entrants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
        $validatedata = courriers_entrants::find($id);
        $validatedata->num_reference = $request->input('num_reference');
        $validatedata->objet = $request->input('objet');
        $validatedata->expediteur = $request->input('expediteur');
        $validatedata->save();
        return view('admin.courriersentrants.indexce')->with('success', 'Courrier mise à jour avec succèss!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\courriers_entrants  $courriers_entrants
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $courriers_entrants = courriers_entrants::findOrFail($id);
        $courriers_entrants->delete();
        return view('admin.courriersentrants.indexce')->with('success', 'courrier supprimer avec succèss!!!');
    }
}
