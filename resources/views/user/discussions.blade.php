@extends('layouts.app')

@section('styles')

@endsection

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column">
          <p class="title">
            Discussions
          </p>
          <p class="subtitle">
            If your having <strong>trouble </strong> try ask for help
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-foot">
    <div class="container">
      <nav class="tabs is-boxed is-centered">
        <ul>
          <li>
            <a href="{{ url('/home') }}">
              <span class="icon">
                  <i class="ion-clock"></i>
              </span>
              Activity
            </a>
          </li>
          <li>
            <a href="{{ url('/categories') }}">
              <span class="icon">
                  <i class="ion-ios-list"></i>
              </span>
              Categories
            </a>
          </li>
          <li class="is-active">
            <a href="{{ url('/discussions') }}">
              <span class="icon">
                  <i class="ion-chatboxes"></i>
              </span>
              Discussions
            </a>
          </li>
        </ul>
      </nav></div>
    </div>
</section>
<!-- <nav class="nav has-shadow">
  <div class="container">
    <div class="nav-center">
      <a class="nav-item is-tab is-active" href="/categories/css">
        CSS
      </a>
      <a class="nav-item is-tab" href="/categories/laravel">
        Laravel
      </a>
      <a class="nav-item is-tab " href="/categories/vuejs">
        Vuejs
      </a>
      <a class="nav-item is-tab " href="/categories/Misc">
        Misc
      </a>
    </div>
  </div>
</nav> -->
<section class="section main">
    <div class="container">
      <div class="columns">
        <div class="column is-4">
          <div class="box">
            <aside class="menu">
              <p class="menu-label">
                Channels
              </p>
              <ul class="menu-list">
                <li><a class="is-active" href="url('/discussions')">All</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">Laravel</a></li>
                <li><a href="#">Vuejs</a></li>
                <li><a href="#">Misc</a></li>
              </ul>
            </aside>
          </div>
        </div>
        <div class="column is-8">
        @foreach($discussions as $discussion)
        <a href="{{ url('/discussion/' . $discussion->id) }}">
          <div class="box discussion-{{ $discussion->channels }}">
                <article class="media">
                  <div class="media-left">
                    <figure class="image is-64x64 circular-square">
                      <img src="uploads/avatars/{{ $discussion->avatar }}" alt="Image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <div class="content">
                      <p>
                        <strong>{{ $discussion->title }}</strong> <small>{{ '@' . $discussion->user }}</small> <small style="float:right;">{{ $discussion->created_at->diffForHumans() }}</small>
                        <br>
                        <span>{{ $discussion->discussionReplies->count() }} replies</span>
                      </p>
                    </div>
                  </div>
                </article>
          </div>
        </a>
        @endforeach
        </div>

      </div>
    </div>
  </section>
@endsection
