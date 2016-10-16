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
  <ul class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="{{ url('admin/videos') }}">
              Videos
          </a>
      </li>

      <li class="breadcrumb-item">
          <a href="{{ url('admin/videos/add') }}">
              Upload Video
          </a>
      </li>
  </ul>
        <div class="columns">

        <!-- DISPLAY USERS -->
        <div class="column is-10">
          <div class="card is-fullwidth">
            <header class="card-header">
              <p class="card-header-title">Add new video</p>
            </header>
            <div class="card-content">
              <form action="/admin/videos/save" method="POST">
              {{ csrf_field() }}
                <div class="control is-horizontal">
                  <div class="control">
                    <input required name="videoTitle" class="input" placeholder="Please enter video title"></input>
                  </div>
                </div>
                <div class="control is-horizontal">
                  <div class="control">
                    <div class="select is-fullwidth">
                      <select required name="videoChannel">
                        <option value="Not Selected">Select Channel</option>
                        <option value="CSS">CSS</option>
                        <option value="laravel">Laravel</option>
                        <option value="misc">Misc</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="control is-horizontal">
                  <div class="control">
                    <input required name="videoUrl" class="input" placeholder="Please enter video url"></input>
                  </div>
                </div>
                <div class="control is-horizontal">
                  <div class="control">
                    <input required name="videoThumbnail" class="input" placeholder="Please enter video thumbnail"></input>
                  </div>
                </div>
                <div class="control is-horizontal">
                  <div class="control">
                    <textarea required name="videoContent" class="textarea" placeholder="Please enter video description"></textarea>
                  </div>
                </div>
                <div class="control is-horizontal">
                  <button type="submit" style="color: #69707a;" class="button-add-task">
                    <span class="icon"><i class="ion-ios-checkmark-outline"></i></span>
                    <span>Save</span>
                  </button>
                </div>
            </div>
          </div>
        </div>
          <div class="column">
           <aside class="menu">
             <div class="box">
               <ul class="menu-list">
<!--                  <li>
                  <button type="submit" style="color: #69707a;" class="button-add-task">
                    <span class="icon"><i class="ion-ios-checkmark-outline"></i></span>
                    <span>Save</span>
                  </button>
                </li> -->
                </form>
                 <li style="padding-top: 5px;">
                  <a style="color: #69707a;" href="{{ url('admin/videos') }}" class="button-add-task">
                    <span class="icon"><i class="ion-ios-close-outline"></i></span>
                    <span>Cancel</span>
                  </a>
                </li>
              </ul>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>
@endsection
