
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
          <a href="#" class="weather"><div id="temp"></div><div id="minutely"></div><i class="fas fa-cloud"></i></a>
          <a href="#" class="login">Login <i class="fas fa-user-circle"></i></a>
          <a href="/donateUs" class="donate">Donate <i class="fas fa-donate"></i></a>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="index.php" class="scrollto"><img src="img/mag_logo_sp.png"><span>&nbsp;Udhyoday</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li class="drop-down"><a href="">Farms</a>
            <ul>

              {{-- rabi crops --}}
              <li class="drop-down"><a href="#">Rabi Crops</a>
                <ul>
                  <li><a href="#">Wheat</a></li>
                  <li><a href="#">Pea</a></li>
                </ul>
              </li>

              {{-- Zaid crops --}}
              <li class="drop-down"><a href="#">Zaid Crops</a>
                <ul>
                  <li><a href="#">Rice</a></li>
                  <li><a href="#">Maize</a></li>
                </ul>
              </li>

              {{-- kharif crops --}}
              <li class="drop-down"><a href="#">Kharif Crops</a>
                <ul>
                  <li><a href="#">Soyabean</a></li>
                  <li><a href="#">Cotton</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#portfolio">About</a></li>
          <li><a href="#team">Market</a></li>
          <li><a href="#footer">support</a></li>
          {{-- <li class="loginBtn ls btn btn-light"><a href="login.php">Login <i class="fa fa-user-circle"></i></a></li> --}}
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->


    </body>
</html>
@yield('header')
@endsection
