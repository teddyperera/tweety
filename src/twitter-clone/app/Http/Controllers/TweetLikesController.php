<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetLikesController extends Controller
{
    public function like(Tweet $tweet)
    {
        $tweet->like(current_user());
        return back();
    }

    public function dislike(Tweet $tweet)
    {
        $tweet->dislike(current_user());
        return back();
    }
}
