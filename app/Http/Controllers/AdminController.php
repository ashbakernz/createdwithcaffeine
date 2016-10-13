<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
     $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
      // $videos = $this->getVideos();
      // return view('user.categories', [
      //   'videos' => $videos,
      // ]);
        return view('admin.dashboard');
    }

    public function videos()
    {
      // $videos = $this->getVideos();
      // return view('user.categories', [
      //   'videos' => $videos,
      // ]);
        return view('admin.videos');
    }

    public function users()
    {
      // $videos = $this->getVideos();
      // return view('user.categories', [
      //   'videos' => $videos,
      // ]);
        return view('admin.users');
    }

}
