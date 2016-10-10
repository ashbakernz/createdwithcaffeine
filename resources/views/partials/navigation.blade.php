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

  <div id="nav-menu" class="nav-menu pull-right">
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
        <a href="{{ url('register') }}" class="button is-primary">
            <span class="icon">
                <i class="ion-person-add"></i>
            </span>
            <span>Sign Up</span>
        </a>
      </span>
      @else
        <span class="nav-item">
          <a class="button" href="{{ url('home') }}">
              <span class="icon">
                  <i class="ion-earth"></i>
              </span>
              <span>Home</span>
          </a>
        </span>
        <span class="nav-item">
          <a class="button" href="{{ url('profile') }}">
              <span class="icon">
                  <i class="ion-person"></i>
              </span>
              <span>Profile</span>
          </a>
        </span>
        @if(Auth::user()->isAdmin == '1')
           <span class="nav-item">
             <a href="{{ url('/admin/dashboard') }}" class="button is-outlined">
                 <span class="icon">
                     <i class="ion-wand"></i>
                 </span>
                 Administrator
             </a>
           </span>
         @endif
         <span class="nav-item">
           <a class="button is-outlined" href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" >
               <span class="icon">
                   <i class="ion-log-out"></i>
               </span>
               Logout
           </a>
         </span>
      @endif
  </div>

  <div class="nav-right nav-menu">
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
        <a href="{{ url('register') }}" class="button is-primary">
            <span class="icon">
                <i class="ion-person-add"></i>
            </span>
            <span>Sign Up</span>
        </a>
      </span>
      @else
      <span class="nav-item pull-right">
      <div class="dropdown pull-right">
          <a href="javascript:void(0)" class="button is-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="icon">
                    <i class="ion-navicon"></i>
              </span>
              <span>{{ Auth::user()->name }}</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="dLabel">
            <a class="dropdown-item" href="{{ url('home') }}">
              <span class="icon">
                  <i class="ion-earth"></i>
              </span>
              <span>
                Home
              </span>
            </a>
            <a class="dropdown-item" href="{{ url('profile') }}">
              <span class="icon">
                  <i class="ion-person"></i>
              </span>
              <span>
                Profile
              </span>
            </a>

            @if(Auth::user()->isAdmin == '1')
              <a class="dropdown-item" href="{{ url('/admin/dashboard') }}">
                <span class="icon">
                    <i class="ion-wand"></i>
                </span>
                <span>
                  Administrator
                </span>
              </a>
            @endif
            <a class="dropdown-item" href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" class="button is-outlined">
                <span class="icon">
                    <i class="ion-log-out"></i>
                </span>
                <span>
                  Logout
                </span>
            </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          </div>
        </div>
      </span>
    @endif
  </div>
</nav>
