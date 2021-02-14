<?php

namespace App\Http\Controllers;

use App\Bar;

class BarController extends Controller
{
    ////////////////////////// NOS VUES //////////////////////////////

    public function viewBars() {
        return view('cocktails', ['bars'=>Bar::get()]);
    }

    public function viewBar($id) {
        $bar = Bar::find($id);
        return view('cocktail', ['bar'=> $bar]);
    }
}
