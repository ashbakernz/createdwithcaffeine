@extends( 'layouts.app')

@section('styles')

@endsection

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column">
          <p class="title">
           Administrator Dashboard
          </p>
          <p class="subtitle">
            Getting the <strong>insights </strong> on your website
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
            <a href="{{ url('/admin') }}">
              <span class="icon">
                  <i class="ion-ios-speedometer"></i>
              </span>
              Dashboard
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/videos') }}">
              <span class="icon">
                  <i class="ion-ios-videocam"></i>
              </span>
              Videos
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/users') }}">
              <span class="icon">
                  <i class="ion-person-stalker"></i>
              </span>
              Users
            </a>
          </li>
        </ul>
      </nav></div>
    </div>

</section>
<section class="section main">
<div class="container is-fluid">

        <!--start columns -->
        <div class="columns">

          <!--start column with width is-3 -->
          <div class="column is-3">
            <div class="card is-fullwidth background-is-primary">
              <div class="card-content">
                <div class="columns is-mobile">
                  <div class="column is-narrow">
                  <span class="icon is-large">
                    <i style="color: white;" class="ion-person-stalker"></i>
                  </span>
                  </div>
                  <div class="column">
                    <p class="title text-is-white">
                      {{ $totalUsers }}
                    </p>
                    <p class="subtitle text-is-white">
                      Total Users
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end column with width is-3 -->

          <!--start column with width is-3 -->
          <div class="column is-3">
            <div class="card is-fullwidth background-is-primary">
              <div class="card-content">
                <div class="columns is-mobile">
                  <div class="column is-narrow">
                  <span class="icon is-large">
                    <i style="color: white;" class="ion-ios-videocam"></i>
                  </span>
                  </div>
                  <div class="column">
                    <p class="title text-is-white">
                      {{ $totalVideos }}
                    </p>
                    <p class="subtitle text-is-white">
                      Total Videos
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end column with width is-3 -->
        </div>
        <!--end columns -->
</section>
@endsection

@section('scripts')
@endsection
