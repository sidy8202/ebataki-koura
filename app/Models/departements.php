<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departements extends Model
{
    use HasFactory;
    protected $fillable =  ['nom'];

    public function utilisateurs()
    {  
        Return $this->belongsTo(utilisateurs::class);
    }

    
}
