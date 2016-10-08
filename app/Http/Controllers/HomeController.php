<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussions;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discussions = $this->getDiscussions();

        return view('home', [
          'discussions' => $discussions,
        ]);
        // return view('home');
    }

    public function getDiscussions() {
       return Discussions::
        orderBy('created_at', 'desc')
        ->get();
    }
}
