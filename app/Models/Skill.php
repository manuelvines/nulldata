<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;

    public function employes() : BelongsToMany
    {
        
       return $this->belongsToMany(Employe::class)
       ->withPivot('score');;

    }
}
