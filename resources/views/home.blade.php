@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="css/profile.css">
@endsection

@section('content')

<section class="section main">
    <div class="container">
      <div class="columns">
        <div class="column is-3">
          <div class="card">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="http://placehold.it/300x225" alt="">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <span class="tag is-dark">#laravel</span>
                <strong class="timestamp">2 d</strong>
              </div>
            </div>
            <footer class="card-footer">
              <a class="card-footer-item">Watch</a>
            </footer>
          </div>
          <br>
        </div>
      </div>
    </div>
  </section>
@endsection
