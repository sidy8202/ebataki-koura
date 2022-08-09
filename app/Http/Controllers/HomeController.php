<?php

namespace App\Http\Controllers;

use App\Models\secretaires;
use App\Models\utilisateurs;
use App\Models\admins;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        // dd($user);
        if($user->status == 'utilisateur')
        {
            $utilisateur = utilisateurs::where ('id_users', $user->id)->first();
            return view ('users.dashboard',compact('utilisateur'));
        }

        elseif($user->status == 'admin')
        {
            $admin = admins::where ('id_users', $user->id)->first();

            return view ('admin.dashboard',compact('admin'));

        }

        elseif($user->status == 'secretaire')
        {
            $secretaire = secretaires::where ('id_users', $user->id)->first();

            return view ('secretaires.dashboard',compact('secretaire'));

        }


        else
        {
          return view('home');  
        }
        
    }
}
