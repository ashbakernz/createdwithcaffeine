@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="/css/profile.css">
@endsection

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column">
          <p class="title">
            Categories
          </p>
          <p class="subtitle">
            Time to <strong>sieve </strong> through the content
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
          <li class="is-active">
            <a href="{{ url('/categories') }}">
              <span class="icon">
                  <i class="ion-ios-list"></i>
              </span>
              Categories
            </a>
          </li>
          <li>
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
<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-center">
      <a class="nav-item is-tab {{ Request::is('categories') ? 'is-active' : '' }}" href="{{ url('/categories') }}">
        All
      </a>
      <a class="nav-item is-tab {{ Request::is('categories/css') ? 'is-active' : '' }}" href="{{ url('/categories/css') }}">
        CSS
      </a>
      <a class="nav-item is-tab {{ Request::is('categories/laravel') ? 'is-active' : '' }}" href="{{ url('/categories/laravel') }}">
        Laravel
      </a>
      <a class="nav-item is-tab {{ Request::is('categories/misc') ? 'is-active' : '' }}" href="{{ url('/categories/misc') }}">
        Misc
      </a>
    </div>
  </div>
</nav>
<section class="section main">
    <div class="container">
      @if ($videos->isEmpty())
      <div class="columns is-centered">
        <div class="column is-3">
          <div class="card">
            <header class="card-header">
               <p class="card-header-title">
                 No videos to display sorry
               </p>
             </header>
          </div>
        </div>
      </div>
      @else

      @foreach($videos->chunk(4) as $chunk)
      <div class="columns">
        @foreach ($chunk as $video)
          <div class="column is-3">
            <div class="card">
            <header class="card-header">
               <p class="card-header-title">
                 {{ $video->title }}
               </p>
             </header>
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="/uploads/video-thumbnails/{{ $video->thumbnail }}" alt="">
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  <span class="tag is-{{ $video->channel }}">#{{ $video->channel }}</span>
                  <strong class="timestamp">{{ $video->created_at->diffForHumans() }}</strong>
                </div>
              </div>
              <footer class="card-footer">
                <a href="/video/{{ $video->id }}" class="card-footer-item">Watch</a>
              </footer>
            </div>
          </div>
          @endforeach
        </div>
        @endforeach

      @endif
      </div>

    </div>
  </section>
@endsection
