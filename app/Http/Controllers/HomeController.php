<?php

namespace App\Http\Controllers;

use App\Discussions;
use App\DiscussionReplies;
use App\Videos;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
     $this->middleware('auth');
    }

    public function index()
    {
      $discussionsCount = count(Discussions::all());
      $videosCount = count(Videos::all());
      $repliesCount = count(DiscussionReplies::all());


      return view('home', ['discussionsCount' => $discussionsCount, 'videosCount' => $videosCount, 'repliesCount' => $repliesCount]);
    }

}
