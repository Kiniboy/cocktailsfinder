<?php

namespace App\Http\Controllers\Admin;

use App\Bar;
use App\Cocktail;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminBarController extends Controller
{
    /// Vue page Les Cocktails ///
    /**
     * @return Factory|Application|View
     */
    public function index() {
        return view('admin/adminBars', ['bars'=>Bar::get()]);
    }

    ///////////// METHODES ADMIN ////////////////

    public function new () {
        $cocktail = new Cocktail();
    }

    public function edit () {}

    public function delete () {}
}
