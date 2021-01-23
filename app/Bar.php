<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    protected $primaryKey = 'id';

    private $name;

    private $adress;

    private $longitude;

    private $laittude;

    protected $fillable = [
        'name',
        'adress',
        'longitude',
        'laittude'
    ];

    public function cocktails(){
        return $this->belongsToMany(Cocktail::class);
    }
}
