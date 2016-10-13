@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="css/profile.css">
@endsection


@section('content')
<div class="container profile">

    <div class="section profile-heading">
      <div class="columns">
          <div class="column is-2">
            <a class="modal-button" data-target="#update-profile-image">
              <div class="image is-128x128 avatar update-image">
                <img id="avatar-image" src="uploads/avatars/{{ $user->avatar }}">
              </div>
            </a>
            <br>
            <!--<a class="button is-primary is-outlined is-small modal-button" data-target="#update-profile-image">
              <span>Edit Picture</span>
            </a>
             <form enctype="multipart/form-data" action="/profile" method="POST">
               <input class="tag is-dark" id="select-image" type="file" name="avatar">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <label for="select-image" class="button is-primary is-outlined is-small">Update Profile Image</label>
               <input type="submit" class="button is-primary is-outlined is-small">
           </form> -->
          </div>
          <div class="column is-4 name">
            <p>
              <span class="title is-bold">{{ $user->name }}</span>
            </p>
            <p class="tagline">The users profile bio would go here, of course. It could be two lines</p>
          </div>
          <div class="column is-2 followers has-text-centered">
            <p class="stat-val">{{ $topicCount }}</p>
            <p class="stat-key">topics</p>
          </div>
          <div class="column is-2 following has-text-centered">
            <p class="stat-val">{{ $repliesCount }}</p>
            <p class="stat-key">replies</p>
          </div>
          <div class="column is-2 likes has-text-centered">
            <p class="stat-val">0</p>
            <p class="stat-key">cups</p>
          </div>
        </div>
    </div>
<!--     <div class="profile-options">
      <div class="tabs is-fullwidth">
        <ul>
          <li class="link is-active"><a><span class="icon"><i class="fa fa-list"></i></span> <span>My Lists</span></a></li>
          <li class="link"><a><span class="icon"><i class="fa fa-heart"></i></span> <span>My Likes</span></a></li>
          <li class="link"><a><span class="icon"><i class="fa fa-th"></i></span> <span>My Posts</span></a></li>
          <li class="link"><a><span class="icon"><i class="fa fa-bookmark"></i></span> <span>My Bookmarks</span></a></li>
        </ul>
      </div>
    </div>

    <div class="box">
      <nav class="level">
        <div class="level-left">
          <div class="level-item">
            <p class="subtitle is-5">
              <strong>123</strong> posts
            </p>
          </div>
          <div class="level-item">
            <p class="control has-addons">
              <input class="input" type="text" placeholder="Find a post">
              <button class="button">
                Search
              </button>
            </p>
          </div>
        </div>

        <div class="level-right">
          <p class="level-item"><strong>All</strong></p>
          <p class="level-item"><a>Published</a></p>
          <p class="level-item"><a>Drafts</a></p>
          <p class="level-item"><a>Deleted</a></p>
          <p class="level-item"><a class="button is-success">New</a></p>
        </div>
      </nav>
    </div> -->
  </div>


  <!-- START ADD NEW TASK MODAL -->
  <div id="update-profile-image" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Update Profile Picture</p>
      </header>
      <section class="modal-card-body">
        <div class="content">
            <form enctype="multipart/form-data" action="/profile" method="POST">
               <input class="is-dark" id="select-image" type="file" name="avatar">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </div>
        </section>
        <footer class="modal-card-foot">
          <button type="submit" class="button is-primary is-outlined is-small">
            Update Profile Picture
          </button>
        </form>
      </footer>
    </div>
  </div>

@endsection

@section('scripts')
  <script type="text/javascript">
    document.getElementById("avatar-image").onmouseover = function()
    {
        this.setAttribute('src', 'uploads/avatars/upload.jpg');
    }
    document.getElementById("avatar-image").onmouseout = function()
    {
        this.setAttribute('src', 'uploads/avatars/{{ $user->avatar }}');
    }
  </script>
@endsection
