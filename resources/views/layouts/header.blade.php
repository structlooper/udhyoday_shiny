
@extends('layouts.basicFile')

@section('content')

<html>
  
    <body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="/forcast" class="weather"><div id="temp"></div><div id="minutely"></div><i class="fas fa-cloud"></i></a>
          {{-- <a href="/farms" class="toggle">
            <div class="button r" id="button-1">
            <input type="checkbox" class="checkbox">
            <div class="knobs"></div>
            <div class="layer"></div>
          </div>
        </a> --}}
        <a href="/homeT">हिंदी </a>
          @guest
          <a class="login" href="{{ route('login') }}">{{ __('Login') }}  <i class="fas fa-user-circle"></i></a>
          {{-- <li class="nav-item">
          </li> --}}
          @if (Route::has('register'))
              {{-- <li class="nav-item"> --}}
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}  <i class="fas fa-user-circle"></i></a>
              {{-- </li> --}}
          @endif
      @else
          <a class="dropdown">
              <a id="navbarDropdown" class="dropdown-toggle login" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->firstName }} &nbsp;<i class="fas fa-user-circle"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-itemg" style="padding: 15px 50px;" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </a>
      @endguest
      <a href="/donateUs" class="donate">Donate <i class="fas fa-donate"></i></a>
          {{-- <a href="/register" class="register">Register <i class="fas fa-user-circle"></i></a> --}}

        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="text-light"><a href="/home" class="scrollto"><img src="img/mag_logo_sp.png"><span>&nbsp;Udhyoday</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/home">Home</a></li>
          <li class="drop-down"><a href="">Farms</a>
            <ul>

              {{-- rabi crops --}}
              <li class="drop-down"><a href="#">Rabi Crops</a>
                <ul>
                  <li><a href="/farms">Potato</a></li>
                  <li><a href="/farms">wheat</a></li>
                  <li><a href="/farms">Pea</a></li>
                </ul>
              </li>

              {{-- Zaid crops --}}
              <li class="drop-down"><a href="#">Zaid Crops</a>
                <ul>
                  <li><a href="/farms">Rice</a></li>
                  <li><a href="/farms">Maize</a></li>
                </ul>
              </li>

              {{-- kharif crops --}}
              <li class="drop-down"><a href="#">Kharif Crops</a>
                <ul>
                  <li><a href="/farms">Soyabean</a></li>
                  <li><a href="/farms">Cotton</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#about">About</a></li>
          <li><a href="/market">Market</a></li>
          <li><a href="/support">support</a></li>
          <li><a href="#faq">Faq</a></li>
          {{-- <li class="loginBtn ls btn btn-light"><a href="login.php">Login <i class="fa fa-user-circle"></i></a></li> --}}
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->


    </body>
</html>
@yield('header')
@endsection
