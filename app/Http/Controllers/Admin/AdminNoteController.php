<?php


namespace App\Http\Controllers\Admin;


use App\Note;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class AdminNoteController extends Controller
{
    /**
     * @return Factory|Application|View
     */
    public function index() {
        return view('admin/adminNotes', ['notes'=>Note::get()]);
    }

}
