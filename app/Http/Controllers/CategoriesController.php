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
     // $videos = $this->getVideos();
     // return view('user.categories', [
     //   'videos' => $videos,
     // ]);


     // $collection = $this->getVideos();

     // $videos = $collection->chunk(4);
     // $videos->toArray();

    $videos = collect($this->getVideos());
    $videos->chunk(4);
    $videos->toArray();


     return view('user.categories', [
       'videos' => $videos,
     ]);
       // return view('home');
   }

   public function getVideos() {
      return Videos::
       orderBy('created_at', 'desc')
       ->get();
   }

   public function sortByCSS(Request $request)
   {
      // $allVideos = $this->getVideos();

      // $videos = $allVideos->where('channel', '=', 'CSS');

      $collection = Videos::
       orderBy('created_at', 'desc')
       ->where('channel', '=', 'CSS')
       ->get();

       $videos = collect($collection);
       $videos->chunk(4);
       $videos->toArray();

      return view('user.categories', [
        'videos' => $videos,
      ]);
   }

   public function sortByLaravel(Request $request)
   {
      // $allVideos = $this->getVideos();

      // $videos = $allVideos->where('channel', '=', 'laravel');
      $collection = Videos::
       orderBy('created_at', 'desc')
       ->where('channel', '=', 'laravel')
       ->get();

       $videos = collect($collection);
       $videos->chunk(4);
       $videos->toArray();

      return view('user.categories', [
        'videos' => $videos,
      ]);
   }

   public function sortByMisc(Request $request)
   {

      $collection = Videos::
       orderBy('created_at', 'desc')
       ->where('channel', '=', 'misc')
       ->get();

       $videos = collect($collection);
       $videos->chunk(4);
       $videos->toArray();

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
