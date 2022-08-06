<?php

namespace App\Models;

namespace App\Models\utilisateurs;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departements extends Model
{
    use HasFactory;

    protected $fillable =  ['nom'];

  
}
