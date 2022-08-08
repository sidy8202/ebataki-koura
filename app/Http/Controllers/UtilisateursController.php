<?php

namespace App\Http\Controllers;

use App\Models\utilisateurs;
use App\Models\User;


use Illuminate\Http\Request;


class UtilisateursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = utilisateurs::all();
        $departements = departements::all();

        
        return view('utilisateurs.utilisateursmodal',compact('utilisateurs','departement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
<<<<<<< HEAD
    {  

=======
    {   
        $departements = departements::all();
        dd($departements);
        return view('utilisateursmodal',compact('id', 'departements')); 
>>>>>>> c55acadffa18b338c44d6a486198a125e4abb3ea
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
        'poste' => 'required',
        'id_departement'=> 'required',
        
        ]);

        utilisateurs::create($barakaila);
        return redirect('utilisateurs')->with('success', 'Utilisateur ajouté avec Succes!!');
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
