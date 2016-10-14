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
   }

   public function getVideos() {
      return Videos::
       orderBy('created_at', 'desc')
       ->paginate(8);
   }

   public function sortByCSS(Request $request)
   {

       $videos = Videos::
       orderBy('created_at', 'desc')
       ->where('channel', '=', 'CSS')
       ->paginate(8);


      return view('user.categories', [
        'videos' => $videos,
      ]);
   }

   public function sortByLaravel(Request $request)
   {

      $videos = Videos::
       orderBy('created_at', 'desc')
       ->where('channel', '=', 'laravel')
       ->paginate(8);

      return view('user.categories', [
        'videos' => $videos,
      ]);
   }

   public function sortByMisc(Request $request)
   {
      $videos = Videos::
       orderBy('created_at', 'desc')
       ->where('channel', '=', 'misc')
       ->paginate(8);

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
