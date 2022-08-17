<?php

namespace App\Http\Controllers\Admin;
use App\Models\utilisateurs;
use App\Models\secretaires;
use App\Models\admins;
use App\Models\user;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
           ;

            return view ('admin.dashboard');
        

    }

    
}

