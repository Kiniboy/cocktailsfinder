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

    public function store(Request $request)
    {
        $cocktail = new Cocktail();
        $cocktail->fill($request->only(['name', 'composition']))->save();
        return redirect()->route('cocktail.index');
    }

    public function edit(Cocktail $cocktail)
    {
        $form = $this->getForm($cocktail);
        return view('admin/cocktailEdit', compact('form'));
    }

    public function update(Cocktail $cocktail, Request $request)
    {
        $cocktail->fill($request->only(['name', 'composition']))->save();
        return redirect()->route('cocktail.index');
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


}
