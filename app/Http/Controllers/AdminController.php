<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
use App\User;
use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
     $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        $totalUsers = count(User::all());
        $totalVideos = count(Videos::all());


        return view('admin.dashboard', ['totalUsers' => $totalUsers, 'totalVideos' => $totalVideos] );
    }

    public function videos()
    {
        $videos = Videos::Paginate(10);

        return view('admin.videos', ['videos' => $videos]);
    }

    public function users()
    {
      $users = User::Paginate(10);

      return view('admin.users', ['users' => $users]);
    }

    public function addVideo()
    {
     return view('admin.videos.add');
    }

    public function saveNewVideo(Request $request){

        $video = new Videos;
        $video->title = $request->videoTitle;
        $video->content = $request->videoContent;;
        $video->channel = $request->videoChannel;
        $video->video_url = $request->videoUrl;
        $video->thumbnail = $request->videoThumbnail;
        $video->save();

        return redirect('/admin/videos');
    }

    public function addThumbnails(Request $request){

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

    public function deleteVideo($id)
    {
        $video = Videos::find($id);
        $video->delete();

        return redirect('/admin/videos');
    }

    public function deleteUser($id)
    {
        $video = User::find($id);
        $video->delete();

        return redirect('/admin/users');
    }

}
