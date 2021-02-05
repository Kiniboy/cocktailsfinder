<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rating;

class Cocktail extends Model
{
    protected $fillable = [
        'name',
        'composition'
    ];

    public function bars(){
        return $this->belongsToMany(Bar::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }


}
