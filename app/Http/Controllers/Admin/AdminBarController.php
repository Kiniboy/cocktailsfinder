<?php

namespace App\Http\Controllers\Admin;

use App\Bar;
use App\Cocktail;
use App\Http\Controllers\Controller;
use App\Forms\PostBar;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class AdminBarController extends Controller
{

    ///////////// METHODES ADMIN ////////////////

    /**
     * @var FormBuilder
     */
    private $formBuilder;

    public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
        $this->middleware('auth');
    }

    public function create()
    {
        $form = $this->getForm();
        return view('admin/barCreate', compact('form'));
    }

    public function store(Request $request)
    {
        $bar = new Bar();
        $bar->fill($request->only(['name', 'adresse', 'longitude', 'latitude']))->save();
        return redirect()->route('bar.index');
    }

    public function edit(Bar $bar)
    {
        $form = $this->getForm($bar);
        return view('admin/barEdit', compact('form'));
    }

    public function update(Bar $bar, Request $request)
    {
        $bar->fill($request->only(['name', 'composition']))->save();
        return redirect()->route('bar.index');
    }

    private function getForm(?Bar $bar = null): \Kris\LaravelFormBuilder\Form
    {
        $bar = $bar ?: new Bar();
        return $this->formBuilder->create(PostBar::class, [
            'model' => $bar
        ]);
    }

    /// Vue page Les Cocktails ///
    /**
     * @return Factory|Application|View
     */
    public function index() {
        return view('admin/adminBars', ['bars'=>Bar::get()]);
    }

    ///////////// METHODES ADMIN ////////////////

    public function viewCreate () {
        return view('admin/bar.create');
    }
}
