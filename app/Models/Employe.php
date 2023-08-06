<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employe extends Model
{
    use HasFactory;
    
    protected $casts = ['birth'=>'datetime'];

    public function job() : BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function skills() : BelongsToMany
    {
       return $this->belongsToMany(Skill::class)
              ->withPivot('score');
    }

    
}
