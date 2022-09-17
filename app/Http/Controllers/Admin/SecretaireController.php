<?php

namespace App\Http\Controllers\Admin;
use App\Models\secretaires;
use App\Models\user;

use App\Models\departements;
use App\Http\Controllers\Controller;
use App\Models\admins;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;


class SecretaireController extends Controller
{
    public function index()
    {
       

        $secretaires = secretaires::all();
        $admin = admins::all();
        $users = User::all();
        $departements = departements::all();
        return view('admin.secretaire.index', compact('secretaires', 'departements', 'admin', 'users'));
        

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
    public function store(Request $request)
    {
        $nagnana = $request->validate(
            [

                'nom'=>['required','string','max:225'],
                'prenom'=>['required','string','max:225'],                
                'adresse'=>['required','string','max:225'],
                'phone'=>['required','string','max:50'],
                'username'=>['required','string','max:225'],
                'email'=>['required','string','email','max:50','unique:users'],
                'id_departement'=>'required',
                'password'=>['required','string','min:5','confirmed']
               
            ]
            );

            if($nagnana)
            {
                $user =  User::create(
                    [
                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'email' =>$request['email'],
                        'password' => bcrypt($request['password']),
                        'status' => 'secretaire',
                    ]
                    
                    );

                    if($user)
                    {
                        $secretaire = secretaires::create(
                            [
                                'id_users' => $user->id,
                                'nom'=>$request['nom'],
                                'prenom'=>$request['prenom'],
                                'adresse'=>$request['adresse'],
                                'phone'=>$request['phone'],                              
                                'id_departement'=> $request['id_departement'],
                                'email'=>$request['email'],
                                'username'=>$request['username'],
                                'password' => bcrypt($request['password']),

                            ]
                            );
                            
                                                    
                            $secretaires = secretaires::all();
                            $departements = departements::all();
                            return view('admin.secretaire.index', compact('secretaires', 'departements'));
                            

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