<nav class="nav has-shadow" id="top">
  <div class="nav-left">

  </div>

  <div class="nav-center">
    <a class="nav-item is-brand" href="{{ url('/home') }}">
        Created With Caffeine
    </a>
  </div>

  <span id="nav-toggle" class="nav-toggle">
    <span></span>
    <span></span>
    <span></span>
  </span>

  <div id="nav-menu" class="nav-right nav-menu">
    @if (Auth::guest())
      <span class="nav-item">
      <a class="button is-primary" href="{{ url('login') }}">
          <span class="icon">
              <i class="ion-log-in"></i>
          </span>
          <span>Login</span>
      </a>
      </span>
      <span class="nav-item">
        <a href="{{ url('register') }}" class="button is-outlined">
            <span class="icon">
                <i class="ion-person-add"></i>
            </span>
            <span>Sign Up</span>
        </a>
      </span>
      @else
      <span class="nav-item">
          <a class="button is-primary" href="{{ url('profile') }}">
              <span class="icon">
                  <i class="ion-person"></i>
              </span>
              <span>{{ Auth::user()->name }}</span>
          </a>
      </span>
      <span class="nav-item">
          <a href="{{ url('/logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();" class="button is-outlined">
              <span class="icon">
                  <i class="ion-log-out"></i>
              </span>
              <span>Logout</span>
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
      </span>
      @if(Auth::user()->isAdmin == '1')
        <span class="nav-item">
          <a href="{{ url('/admin/dashboard') }}" class="button is-outlined">
              <span class="icon">
                  <i class="ion-gear-a"></i>
              </span>
          </a>
        </span>
      @endif
    @endif
  </div>
</nav>
