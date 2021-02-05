<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use willvincent\Rateable\Rating;
use willvincent\Rateable\Tests\models\Post;


class NotesController extends Controller
{
    public function postStar (Request $request, Post $post) {
        $rating = new Rating;
//        $rating->user_id = Auth::id();
        $rating->rating = $request->input('star');
        $post->ratings()->save($rating);
        return redirect()->back();
    }
}
