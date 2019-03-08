<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('img/logo.png') }}"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">All Areas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">all Guides</a>
          </li>
          
        @if (Route::has('login'))
                    @auth
                    <li class="nav-item ">
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                      </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                      </li>

                        @if (Route::has('register'))
                      <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                          </li>
                        @endif
                    @endauth
            @endif
        </ul>
      </div>
    </div>
  </nav>

