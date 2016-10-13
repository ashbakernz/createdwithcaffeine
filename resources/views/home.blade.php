@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="css/profile.css">
@endsection

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column">
          <p class="title">
            Recent Activity
          </p>
          <p class="subtitle">
            Everything you need to <strong>learn </strong> the basics
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-foot">
    <div class="container">
      <nav class="tabs is-boxed is-centered">
        <ul>
          <li class="is-active">
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
<nav class="level">
  <div class="level-item has-text-centered">
    <p class="heading">Videos</p>
    <p class="title">3</p>
  </div>
  <div class="level-item has-text-centered">
    <p class="heading">Discussions</p>
    <p class="title">7</p>
  </div>
  <div class="level-item has-text-centered">
    <p class="heading">Replies</p>
    <p class="title">18</p>
  </div>
  <div class="level-item has-text-centered">
    <p class="heading">Cups of coffee</p>
    <p class="title">109</p>
  </div>
</nav>
    <div class="container">
      <div class="columns">
        <div class="column is-3">
          <div class="card">
          <header class="card-header">
             <p class="card-header-title">
             Title
             </p>
            <!--
            <a class="card-header-icon">
               <i class="fa fa-angle-down"></i>
             </a>
             -->
           </header>
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="http://placehold.it/300x225" alt="">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <span class="tag is-dark">#channel</span>
                <strong class="timestamp">2 days ago</strong>
              </div>
            </div>
            <footer class="card-footer">
              <a class="card-footer-item">Watch</a>
            </footer>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
