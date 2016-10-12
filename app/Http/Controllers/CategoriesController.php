<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
use Auth;
use App\Http\Requests;

class CategoriesController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
   }

   public function index()
   {
     $videos = $this->getVideos();
     return view('user.categories', [
       'videos' => $videos,
     ]);
       // return view('home');
   }

   public function getVideos() {
      return Videos::
       orderBy('created_at', 'desc')
       ->Paginate(8);
   }

   public function sortByCSS(Request $request)
   {
      $allVideos = $this->getVideos();

      $videos = $allVideos->where('channel', '=', 'CSS');

      return view('user.categories', [
        'videos' => $videos,
      ]);
   }

   public function sortByLaravel(Request $request)
   {
      $allVideos = $this->getVideos();

      $videos = $allVideos->where('channel', '=', 'laravel');

      return view('user.categories', [
        'videos' => $videos,
      ]);
   }

   public function sortByMisc(Request $request)
   {
      $allVideos = $this->getVideos();

      $videos = $allVideos->where('channel', '=', 'misc');

      return view('user.categories', [
        'videos' => $videos,
      ]);

   }

   public function viewVideo($id)
   {
    $video = Videos::
        where('id', $id)
        ->first();
       return view('user.categories.view', [
         'video' => $video,
       ]);
   }

}
