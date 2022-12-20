<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('home/images/logo3.png')}}" alt="Marshmallow"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
        <img src="{{asset('home/images/logo-dark.svg')}}" class="logo-mobile-menu" alt="logo">
        <a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
      </div>
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Download App</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('view_cart')}}">Cart</a>
        </li>

        @if (Route::has('login'))

        @auth
        <li class="nav-item dropdown">
        <x-app-layout>

        </x-app-layout>
        </li>

        @else
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle btn btn-success" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{ route('login') }}">Log In</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('register') }}">Register</a>
            </div>
          </li>
        </ul>
        @endauth
        @endif
      </ul>
    </div>
  </div>
</nav>
@yield('content')