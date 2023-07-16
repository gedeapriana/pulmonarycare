<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    public function symptoms(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Symptom::class, 'disease_symptom');
    }

    public function solutions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Solution::class);
    }
}
