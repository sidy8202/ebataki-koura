<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\admins;
use App\Models\courriers_entrants;
use App\Models\courriers_sortants;
use App\Models\User;
=======
>>>>>>> 773617b947b2dd1e1f902b74eb1554d16fb4e08b
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\departements;

use App\Models\admins;


class AdminsController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
=======
        $departements= departements::all();

        return view('adminsmodal',compact('departements'));
>>>>>>> 773617b947b2dd1e1f902b74eb1554d16fb4e08b
    }

    public function create()
    {
        return view('admins.dashboard');

    }


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
                        'status' => 'admin',
                    ]
                    
                    );

                    if($user)
                    {
                        $adminis = admins::create(
                            [
                                'id_users' => $user->id,
                                'nom'=>$request['nom'],
                                'prenom'=>$request['prenom'],
                                'adresse'=>$request['adresse'],
                                'phone'=>$request['phone'],
                                
                               
                                'email'=>$request['email'],
                                'username'=>$request['username'],
                                'password' => bcrypt($request['password']),

                            ]
                            );
                            
                            return redirect('/adminskoura')->with('success', 'Admin ajouté avec Succes!!');


                    }
            }

    }
}
