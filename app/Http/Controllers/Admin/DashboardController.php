<?php

namespace App\Http\Controllers\Admin;
use App\Models\utilisateurs;
use App\Models\secretaires;
use App\Models\admins;
use App\Models\user;



use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\courriers_entrants;
use App\Models\courriers_sortants;
use App\Models\secretaires;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        
        $courriers_reçus = courriers_entrants::count();
        $courriers_envoyes = courriers_sortants::count();
        //$secretaires = User::where('status == secretaire')->count();
        return view('admin/dashboard',compact('courriers_reçus','courriers_envoyes'));
        
    }

    
}

