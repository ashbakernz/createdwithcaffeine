<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiscussionReplies;
use App\Http\Requests;
use Auth;

class RepliesController extends Controller
{
    public function __construct()
    {
     $this->middleware('auth');
    }

    public function add(Request $request){

        $replies = new DiscussionReplies;
        $replies->discussions_id = $request->discussion_id;
        $replies->user_id = Auth::User()->id;
        $replies->user_name = Auth::User()->name;
        $replies->content = $request->content;
        $replies->save();

        return redirect('/discussion/' . $request->discussion_id);
    }

    public function delete($reply_id, $post_id)
    {
        $reply = DiscussionReplies::find($reply_id);
        $reply->delete();
        return redirect('/discussion/' . $post_id);
    }

}
