@extends('layouts.app')

@section('styles')
<style type="text/css">
.image iframe {
    display: block;
    height: auto;
    width: 100%;
}
iframe {
    max-width: 100%;
}
</style>
@endsection

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column">
          <p class="title">
            {{ $video->title }}
          </p>
          <p class="subtitle">
           {{ $video->created_at->diffForHumans() }}
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
<section class="section main">
    <div class="container">
      <div class="columns">
<!--         <div class="column is-4">
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
        </div> -->
        <div class="column is-1">
        </div>
        <div class="column is-10">
<!--           <div class="card is-fullwidth">
            <header class="card-header">
              <p class="card-header-title">
                video title
              </p>
              <a class="card-header-text">
                <span class="tag is-"></span>
              </a>
            </header>
            <div class="card-content">
              <div class="content">
                content
                <br>
                <small>time</small>
              </div>
            </div>
          </div> -->

          <div class="container">
              <div class="columns">
                <div class="column is-12">
                  <div>
                    <iframe src="https://player.vimeo.com/video/{{ $video->video_url }}" frameborder="0" width="1280" height="720" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  </div>
                  <br>
                  <div class="box video-meta">
                    <div class="video-title"><strong>{{ $video->title }}</strong></div>
                    <br>
                    <article class="media">
                      <div class="media-content">
                        <div class="content">
                          <div class="columns">
                            <div class="column is-6">
                              <p>
                                {{ $video->content }}
                              </p>
                            </div>
                            <div class="column is-6">
                              <nav class="nav">
                                <div class="container">
                                  <div class="nav-right">
                                    <a class="nav-item is-tab is-active">
                                      <span class="title is-4">{{ $video->views }} views</span>
                                    </a>
                                  </div>
                                </div>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
        </div>

          <div class="column is-1">
          </div>
        </a>
        </div>
      </div>
    </div>
  </section>
@endsection
