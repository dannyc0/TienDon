<nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top">

    @auth
      <div id="toggle-menu" class="toggle-menu-admin text-center">
        <i class="fas fa-bars fa-2x"></i>
        <i class="fas fa-align-left fa-2x"></i>
      </div>
    @endauth
    <a class="navbar-brand text-center" href="{{ url('/') }}">
        <img src="img/nav_logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a></li>
            @else
              <li><a class="nav-link user-photo test" href=""><img src="" alt="foto"></a></li>
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('personalInfo')}}">
                        {{ __('Información de usuario') }}
                    </a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Cerrar sesión') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
            @endguest
        </ul>
    </div>

</nav>
