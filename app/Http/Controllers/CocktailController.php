<?php

namespace App\Http\Controllers;

use App\Bar;
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
    public function viewCocktail($id) {
        $cocktail = Cocktail::find($id);
        return view('cocktail', ['cocktail'=> $cocktail]);
    }

    public function viewBars() {
        return view('cocktails', ['bars'=>Bar::get()]);
    }

    public function viewBar($id) {
        $bar = Bar::find($id);
        return view('cocktail', ['bar'=> $bar]);
    }
}
