<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    protected $primaryKey = 'id';

    private $name;

    private $composition;
}
