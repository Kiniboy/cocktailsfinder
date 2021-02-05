<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    protected $fillable = [
        'name',
        'adress',
        'longitude',
        'latitude'
    ];

    public function cocktails(){
        return $this->belongsToMany(Cocktail::class);
    }
}
