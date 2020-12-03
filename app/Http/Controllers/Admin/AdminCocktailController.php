<?php

namespace App\Http\Controllers\Admin;

use App\Cocktail;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminCocktailController extends Controller
{
    /// Vue page Les Cocktails ///
    /**
     * @return Factory|Application|View
     */
    public function index() {
        return view('admin/adminCocktails', ['cocktails'=>Cocktail::get()]);
    }

    ///////////// METHODES ADMIN ////////////////

    public function new () {}

    public function edit () {}

    public function delete () {}

}
