<div class="top-menu white-color">
  <div id="toggle-menu" class="toggle-menu-admin text-center">
    <i class="fas fa-bars fa-2x"></i>
    <i class="fas fa-align-left fa-2x"></i>
  </div>
  <div class="brand-image text-center">
    <img src="img/nav_logo.png" alt="">
  </div>
  <div class="user-info test">
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @else
            <li class="nav-item dropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
        @endguest
    </ul>
  </div>
</div>
