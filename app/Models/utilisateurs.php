<?php

namespace App\Models;

namespace App\Models\departements;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateurs extends Model
{
    use HasFactory;
    protected $fillable =  ['nom','prenom','adresse','phone','email','username','poste','id_departement'];


}


