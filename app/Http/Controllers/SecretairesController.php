<?php

namespace App\Http\Controllers;

use App\Models\secretaires;
use App\Models\departements;
use Illuminate\Http\Request;
use App\Http\Requests\SecretaireFormRequest;
use App\Models\User;


class SecretairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $secretaires = secretaires::all();
        $departements = departements::all();
        return view('secretaire', compact('secretaires', 'departements'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        $data = $request->validate([
            'nom' => ['required','string','max:225'],
            'prenom' => ['required','string','max:225'],
            'adresse' => ['required','string','max:225'],
            'phone' => ['required','string','max:50'],
            'email' => ['required','string','email','max:50','unique:users'],
            'username' => ['required','string','max:50','unique:secretaires'],
            'poste' => ['required','string','max:30'],
            'password'=>['required','string','min:5','confirmed'],
            'id_departement'=> 'required',
            
            ]);
    
            if($data)
            {
    
            $good= user::create(
                [
    
                'nom' => $request['nom'],
                'prenom' => $request['prenom'],
                'email' =>$request['email'],
                'password' => bcrypt($request['password']),
                'status' => 'secretaires',
                ]
                );
                if($good)
                {
                    $depot = secretaires::create(
                        [
                            'id_users' => $good->id,
    
                            'nom' => $request['nom'],
                            'prenom'  => $request['prenom'],
                            'adresse'  => $request['adresse'],
                            'phone'  =>	$request['phone'],
                            'email' =>$request['email'],
                            'username' => $request['username'],
                            'password' => bcrypt($request['password']),
                            'poste'	=> $request['poste'],
                            'id_departement'=> $request['id_departement'],
                                        
                            
                        ]
    
                        );
                return redirect('secretaires')->with('success', 'Utilisateur ajouté avec Succes!!');
    
                }
            }
        
        
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
