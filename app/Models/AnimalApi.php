<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalApi extends Model
{
    protected $fillable = [
        'name',
        'race',
        'weight'
    ];
}
