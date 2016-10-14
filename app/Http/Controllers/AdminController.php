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
        return view('admin.dashboard');
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
        $video->task = $request->task;
        $video->author = Auth::User()->name;
        $video->status = 'Not Completed';
        $video->type = $request->type;
        $video->save();

        return redirect('/admin/videos');
    }

}
