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

        <!-- DISPLAY USERS -->
        <div class="column is-10">
          <div class="card is-fullwidth">
            <header class="card-header">
              <p class="card-header-title">Add new video</p>
            </header>
            <div class="card-content">
              <form>
                <div class="control is-horizontal">
                  <div class="control">
                    <input name="videoTitle" class="input" placeholder="Please enter video title"></input>
                  </div>
                </div>
                <div class="control is-horizontal">
                  <div class="control">
                    <div class="select is-fullwidth">
                      <select>
                        <option>Select Channel</option>
                        <option>CSS</option>
                        <option>laravel</option>
                        <option>misc</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="control is-horizontal">
                  <div class="control">
                    <input name="videoUrl" class="input" placeholder="Please enter video url"></input>
                  </div>
                </div>
                <div class="control is-horizontal">
                  <div class="control">
                    <input name="videoThumbnail" class="input" placeholder="Please enter video thumbnail"></input>
                  </div>
                </div>
                <div class="control is-horizontal">
                  <div class="control">
                    <textarea name="videoContent" class="textarea" placeholder="Please enter video description"></textarea>
                  </div>
                </div>
            </div>
          </div>
        </div>
          <div class="column">
           <aside class="menu">
             <div class="box">
               <ul class="menu-list">
                 <li>
                  <a style="color: #69707a;" href="{{ url('admin/videos/save') }}" class="button-add-task">
                    <span class="icon"><i class="ion-ios-checkmark-outline"></i></span>
                    <span>Save</span>
                  </a>
                </li>
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
