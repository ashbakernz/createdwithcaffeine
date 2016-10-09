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
</nav>
<section class="section">
    <div class="container">

    </div>
  </section>
@endsection
