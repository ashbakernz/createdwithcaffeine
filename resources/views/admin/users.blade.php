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
           Manage Users
         </p>
         <p class="subtitle">
          Manage all em <strong>peoples </strong> accounts
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
        <li>
          <a href="{{ url('/admin/videos') }}">
            <span class="icon">
              <i class="ion-ios-videocam"></i>
            </span>
            Videos
          </a>
        </li>
        <li class="is-active">
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
              <a style="color: #69707a;" href="#" class="button-add-task modal-button" data-target="#modal-add-new-task">
                <span class="icon"><i class="ion-plus-round"></i></span>
                <span>New User</span>
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
        <p class="card-header-title">Users</p>
        <div class="search control has-addons">
          <input class="input" type="text" placeholder="Search">
          <button class="button is-info"><i class="fa fa-search"></i></button>
        </div>
      </header>
      <div class="card-content">
        <div class="responsive-table">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Joined</th>
                <th>Type</th>
                <th>Last Active</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>
                  <a>{{ $user -> name }}</a>
                </td>
                <td>
                  {{ $user->created_at->diffForHumans() }}
                </td>
                <td>
                  @if ($user-> isAdmin == 1)
                  Admin
                  @else
                  User
                  @endif
                </td>
                <td>
                  {{ $user->updated_at->diffForHumans() }}
                </td>
                <td>
                  <a>
                    <div class="icon">
                      <i class="ion-ios-eye-outline" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="" data-original-title="Overview"></i>
                    </div>
                  </a>
                  <a href="{{ url('admin/users/delete/' . $user->id) }}">
                    <div class="icon">
                      <i class="ion-ios-trash-outline" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="" data-original-title="Trash"></i>
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
