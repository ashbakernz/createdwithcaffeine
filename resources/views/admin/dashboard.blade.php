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
  <div class="container">

  </div>
</section>
@endsection
