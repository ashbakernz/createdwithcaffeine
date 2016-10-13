<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Discussions;
use App\DiscussionReplies;

use App\Http\Requests;

class UserController extends Controller
{
    public function profile(){

      $topicCount = $this->getTopicCount(Auth::user()->id);
      $repliesCount = $this->getRepliesCount(Auth::user()->id);

      return view('user.profile', ['user' => Auth::user(), 'topicCount' => $topicCount, 'repliesCount' => $repliesCount] );
    }

    public function getTopicCount($id){
      return count(Discussions::
       where('user_id', $id)
       ->get());
    }

    public function getRepliesCount($id){
      return count(DiscussionReplies::
       where('user_id', $id)
       ->get());
    }


    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
          $avatar = $request->file('avatar');
          $filename = time() . '.' . $avatar->getClientOriginalExtension();
          Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

          $user = Auth::user();
          $user->avatar = $filename;
          $user->save();
        }

        return view('user.profile', ['user' => Auth::user()] );
    }
}
