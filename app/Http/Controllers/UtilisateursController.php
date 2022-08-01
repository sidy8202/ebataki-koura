<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateurs;
use App\Models\departements;

class UtilisateursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bara = utilisateurs::all();
        return view('utilisateursmodal')->with('bara',$bara);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $departements = departements::all();
        return view('utilisateursmodal',compact('departements'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barakaila = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'adresse' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'username' => 'required',
        'password' => 'required',
        'poste' => 'required',
        'id_departement'=> 'required',
        
        ]);

        utilisateurs::create($barakaila);
        return redirect('/utilisateurs')->with('success', 'Utilisateur ajouté avec Succes!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function show(utilisateurs $utilisateurs)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barakaila = utilisateurs::find($id);
        $barakaila->nom = $request->input('nom');
        $barakaila->prenom = $request->input('prenom');
        $barakaila->adresse = $request->input('adresse');
        $barakaila->phone = $request->input('phone');
        $barakaila->email = $request->input('email');
        $barakaila->poste = $request->input('poste');
        $barakaila->id_departement = $request->input('id_departement');

        $barakaila->save();
        return redirect('/utilisateurs')->with('success', 'utilisateur Modifié avec Succes!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barakaila = utilisateurs::find($id) ;
        $barakaila->delete();
        return redirect('/utilisateurs')->with('success', 'Utilisateurs Supprimé avec Succes!!');
    }
}
