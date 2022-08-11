<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSecretairesController extends Controller
{
    public function index()
    {
    
        return view('secretaire.dashboard');

    }
}
