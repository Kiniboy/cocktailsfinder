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
    public function viewCocktail($id) {
//        dd($cocktail);
//        Cocktail::get($id);
        $cocktail = Cocktail::find($id);
//        dd($cocktail);
        return view('cocktail', ['cocktail'=> $cocktail]);
    }
//
//    public function show($id)
//    {
//        return view('/cocktail', [
//            'cocktail' => Cocktail::findOrFail($id)
//        ]);
//    }
}
