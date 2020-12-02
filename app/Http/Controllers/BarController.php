<?php

namespace App\Http\Controllers;

use App\Bar;
use Illuminate\Http\Request;

class BarController extends Controller
{
    public function index() {
        return view('places', ['bar'=>Bar::get()]);
    }

    public function view (Cocktail $cocktail) {}

    public function viewByid() {}

    public function edit () {}

    public function delete () {}
}
