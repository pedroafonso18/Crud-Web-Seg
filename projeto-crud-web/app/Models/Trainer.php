<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Trainer extends Model
{
    protected $fillable = [
        "nome",
    ];

    public function pokemon(): HasMany
    {

        return $this->hasMany(Pokemon::class);
    }
}

