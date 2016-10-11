<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Discussions;
use Auth;

class DiscussionsController extends Controller
{
    public function __construct()
    {
     $this->middleware('auth');
    }

    public function index()
    {
        $discussions = $this->getDiscussions();

        return view('user.discussions', [
          'discussions' => $discussions,
        ]);
    }

   public function view($id)
   {
    $discussion = Discussions::
        where('id', $id)
        ->with('discussionReplies')
        ->first();
       return view('user.discussions.view', [
         'discussion' => $discussion,
       ]);
   }

    public function getDiscussions() {
       return Discussions::
        orderBy('created_at', 'desc')
        ->with('discussionReplies')
        ->Paginate(10);
    }
}
