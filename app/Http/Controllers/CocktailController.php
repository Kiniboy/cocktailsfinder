<?php

namespace App\Http\Controllers;

use App\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    ////////////////////////// NOS VUES //////////////////////////////

    /// Vue page Les Cocktails ///
    public function viewCocktails() {
        return view('cocktails', ['cocktails'=>Cocktail::get()]);
    }

    /// Vue page détail d'un cocktail ///
    public function viewCocktail($cocktail) {
        return view('cocktail', $cocktail);
    }
}
