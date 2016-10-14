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
           Manage Videos
          </p>
          <p class="subtitle">
            Got some new <strong>content </strong> or just need'a manage it
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
            <a href="{{ url('/admin') }}">
              <span class="icon">
                  <i class="ion-ios-speedometer"></i>
              </span>
              Dashboard
            </a>
          </li>
          <li class="is-active">
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
        <div class="columns">
          <div class="column">
           <aside class="menu">
             <div class="box">
               <ul class="menu-list">
                 <li>
                  <a style="color: #69707a;" href="{{ url('admin/videos/add') }}" class="button-add-task">
                    <span class="icon"><i class="ion-ios-cloud-upload"></i></span>
                    <span>Upload</span>
                  </a>
                </li>
              </ul>
              <p class="menu-label">
               Sort by
             </p>
             <ul class="menu-list">
               <li>
                <a style="color: #69707a;" href="#" "="">All <span class="tag is-color-moviko is-small"></span></a>
              </li>
            </ul>
          </div>
        </aside>
      </div>
      <!-- DISPLAY USERS -->
      <div class="column is-10">
        <div class="card is-fullwidth">
          <header class="card-header">
            <p class="card-header-title">Videos</p>
          </header>
          <div class="card-content">
            <div class="responsive-table">
              <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Channel</th>
                    <th>Created At</th>
                    <th>Last Edited</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($videos as $video)
                  <tr>
                    <td>
                      <a href="{{ url('video/' . $video->id )}}">{{ $video->title }}</a>
                    </td>
                    <td>
                    {{ $video->channel }}
                    </td>
                    <td>
                      {{ $video->created_at->diffForHumans() }}
                    </td>
                    <td>
                      {{ $video->updated_at->diffForHumans() }}
                    </td>
                    <td>
                      <a>
                        Overview
                        <div class="icon">
                          <i class="ion-paper-airplane" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="" data-original-title="Overview"></i>
                        </div>
                      </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
