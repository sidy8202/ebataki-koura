<?php

namespace App\Http\Controllers\Admin;
use App\Models\secretaires;
use App\Models\departements;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SecretaireFormRequest;

class SecretaireController extends Controller
{
    public function index()
    {
       

        $secretaires = secretaires::all();
        $departements = departements::all();
        return view('admin.secretaire.index', compact('secretaires', 'departements'));
        

    }

    public function create()
    
    {
        $secretaires = secretaires::all();
        return view('secretaire', compact('secretaires'));
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SecretaireFormRequest $request)
    {
        $data = $request->validated();

        $secretaire = new secretaires;
        $secretaire->nom = $data['nom'];
        $secretaire->prenom = $data['prenom'];
        $secretaire->adresse = $data['adresse'];
        $secretaire->phone = $data['phone'];
        $secretaire->email = $data['email'];
        $secretaire->username = $data['username'];
        $secretaire->password = $data['password'];
        $secretaire->id_departement = $data['id_departement'];
    
        $secretaire->save();
        $secretaires = secretaires::all();
        $departements = departements::all();
        return view('admin.secretaire.index', compact('secretaires', 'departements'));
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\secretaires  $secretaires
     * @return \Illuminate\Http\Response
     */
    public function show(secretaires $secretaires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\secretaires  $secretaires
     * @return \Illuminate\Http\Response
     */
    public function edit(secretaires $secretaires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\secretaires  $secretaires
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, secretaires $secretaires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\secretaires  $secretaires
     * @return \Illuminate\Http\Response
     */
    public function destroy(secretaires $secretaires)
    {
        //
    }



    
}