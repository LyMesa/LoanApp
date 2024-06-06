<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <!-- Authentication Links -->
      @guest
          @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('') }}</a>
              </li>
          @endif

          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('ឈ្មោះអ្នកប្រើប្រាស់') }}</a>
              </li>
          @endif
      @else
             <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img height="32" src="{{ asset('assets') }}/dist/img/avatar4.png" class="img-circle elevation-1"
                        alt="User Image">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                <div class="text-center">
                                    <img height="40" src="{{ asset('assets') }}/dist/img/avatar4.png" class="img-circle elevation-1"
                                        alt="User Image">
                                        <p>
                                            {{ Auth::user()->name }}- Web Developer
                                        <br><small>Member since Nov. 2012</small><br/>
                                        </p>
                                </div>
                            </div>
                            <div  class="d-flex justify-content-start">
                                    <a class="dropdown-item dropdown-footer" href="{{ route('login') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Login') }}
                                    </a>

                                    <a class="dropdown-item dropdown-footer" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </div>
             </li>
      @endguest
    </ul>

  </nav>
