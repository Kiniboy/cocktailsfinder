<?php

namespace App\Http\Controllers\Admin;

use App\Cocktail;
use App\Forms\PostCocktail;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class AdminCocktailController extends Controller
{

    /**
     * @var FormBuilder
     */
    private $formBuilder;

    public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }

    public function create()
    {
        $form = $this->getForm();
        return view('admin/cocktailCreate', compact('form'));
    }

    public function store()
    {
        $form = $this->getForm();
//        dd($form);
        $form->getModel()->save();
        return redirect()->route('/admin/cocktails');
    }

    public function edit(Cocktail $cocktail)
    {
        $form = $this->getForm($cocktail);
        return view('admin/cocktailEdit', compact('form'));
    }

    public function update(Cocktail $cocktail, Request $request)
    {
        $form = $this->getForm($cocktail);
        $form->redirectIfNotValid();
        $cocktail->save();
        return redirect()->route('/admin/cocktails');
    }

    private function getForm(?Cocktail $cocktail = null): \Kris\LaravelFormBuilder\Form
    {
        $cocktail = $cocktail ?: new Cocktail();
        return $this->formBuilder->create(PostCocktail::class, [
            'model' => $cocktail
        ]);
    }

    /// Vue page Les Cocktails ///
    /**
     * @return Factory|Application|View
     */
    public function index() {
        return view('admin/adminCocktails', ['cocktails'=>Cocktail::get()]);
    }

    ///////////// METHODES ADMIN ////////////////

    public function viewCreate () {
        return view('admin/cocktail.create');
    }

//    public function store () {
////        dd($request->all());
////        $name = $request->input('nom');
////        $composition = $request->input('composition');
//        var_dump(request('nom'));
//        var_dump(request('composition'));
////        return redirect('admin/adminCocktails', 302);
//    }


//
//    public function edit () {
//
//    }
//
//    public function delete () {}

}
