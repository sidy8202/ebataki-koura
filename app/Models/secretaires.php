<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretaires extends Model
{
    use HasFactory;

protected $table = 'secretaires';

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'phone',
        'email',
        'username',
        'password',
        'id_departement',
        'id_users'

    ];

    public function users()
    {
        return $this->belongsTo(users::class,'id_users');

    }
}
