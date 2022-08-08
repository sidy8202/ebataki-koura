<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateurs extends Model
{
    use HasFactory;
    protected $fillable =  [
        'nom',
        'prenom',
        'adresse',
        'phone',
        'email',
        'username',
        'poste',
        'id_departement',
        'id_users'];  

    public function users()
    {
        return $this->belongsTo(users::class,'id_users');

    }
}


